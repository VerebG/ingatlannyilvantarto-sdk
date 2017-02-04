<?php

namespace Janoszen\Ingatlannyilvantarto;

use DOMDocument;
use Janoszen\Ingatlannyilvantarto\Http\Guzzle\GuzzleHttpClientAdapter;
use Janoszen\Ingatlannyilvantarto\Http\HttpClientAdapter;
use Janoszen\Ingatlannyilvantarto\Origo9\Exceptions\Origo9Exception;
use Janoszen\Ingatlannyilvantarto\Origo9\Responses\ExportIngatlanResponse;
use Janoszen\Ingatlannyilvantarto\Origo9\Responses\ExportMegbizoResponse;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class Origo9Client {
	/**
	 * For some reason, instead of an empty list we get an error.
	 */
	const ERROR_NO_INGATLAN_FOUND = 'Nem található ingatlan a referenshez tartozó irodában!';
	/**
	 * For some reason, instead of an empty list we get an error.
	 */
	const ERROR_NO_MEGBIZO_FOUND = 'A referens irodájához nem tartoznak megbízók!';

	private $nonErrorErrors = [
		self::ERROR_NO_INGATLAN_FOUND,
		self::ERROR_NO_MEGBIZO_FOUND,
	];

	/**
	 * @var string
	 */
	private $username;

	/**
	 * @var string
	 */
	private $password;

	/**
	 * @var HttpClientAdapter
	 */
	private $httpAdapter;

	/**
	 * @var LoggerInterface
	 */
	private $logger;

	/**
	 * @param string $username
	 * @param string $password
	 * @param HttpClientAdapter|null $httpAdapter
	 * @param LoggerInterface|null $logger
	 */
	public function __construct(
		$username,
		$password,
		HttpClientAdapter $httpAdapter = null,
		LoggerInterface $logger = null
	) {
		$this->username = $username;
		$this->password = $password;
		if (!$httpAdapter) {
			$httpAdapter = new GuzzleHttpClientAdapter();
		}
		$this->httpAdapter = $httpAdapter;
		if (!$logger) {
			$logger = new NullLogger();
		}
		$this->logger = $logger;
	}

	/**
	 * @param string $type
	 * @return \SimpleXMLElement
	 * @throws Origo9Exception
	 */
	private function request($type, $requestId) {
		$eol = "\r\n";
		$boundary = '----' . substr(md5(rand(0,32000)),0,10);
		$requestBody =
			'--' . $boundary . $eol .
			'Content-Disposition: form-data; name="keres"; filename="request.xml"' . $eol .
			'Content-Type: text/xml' . $eol .
			$eol .
			'<?xml version="1.0" encoding="UTF-8"?>' . $eol .
			'<Keres>' . $eol .
            '<FelhasznaloLogin>' . htmlspecialchars($this->username) . '</FelhasznaloLogin>' . $eol .
            '<FelhasznaloJelszo>' . htmlspecialchars($this->password) . '</FelhasznaloJelszo>' . $eol .
            '<KeresTipus>' . htmlspecialchars($type) . '</KeresTipus>' . $eol .
			'</Keres>' . $eol .
			'--' . $boundary . '--' . $eol;
		/**
		 * @var RequestInterface $request
		 */
		$request = $this->httpAdapter->createRequest();
		$request = $request->withMethod('POST');
		$request = $request->withUri(
			$this->httpAdapter->getEmptyUri()
				->withScheme('http')
				->withHost('ingatlannyilvantarto.hu')
				->withPort(80)
				->withPath('/api/')
		);
		$request = $request->withHeader('Content-Type', 'multipart/form-data; boundary=' . $boundary);
		$request = $request->withHeader('Content-Length', strlen($requestBody));
		$request = $request->withBody($this->httpAdapter->getStringStream($requestBody));

		$this->logger->debug('[request ' . $requestId . '] POST export ' . $type . ' -> ' . $request->getUri());

		$httpResponse = $this->httpAdapter->request($request);

		if ($httpResponse->getStatusCode() !== 200) {
			$this->logger->notice('[request ' . $requestId . '] <- HTTP ' . $httpResponse->getStatusCode());
			throw new Origo9Exception(
				'Invalid HTTP response code returned: ' . $httpResponse->getStatusCode(),
				$httpResponse->getStatusCode()
			);
		}

		$responseText = $httpResponse->getBody()->__toString();

		$tempFilePrefix = sys_get_temp_dir() . '/ingatlannyilvantarto-' . mt_rand();
		file_put_contents($tempFilePrefix . '.xml', $responseText);
		file_put_contents($tempFilePrefix . '.xsd', file_get_contents(__DIR__ . '/Origo9/origo9.xsd'));
		$document = new DOMDocument();
		if (!@$document->loadXML($tempFilePrefix . '.xml') || !@$document->schemaValidate($tempFilePrefix . '.xsd')) {
			$this->logger->notice('[request ' . $requestId . '] XSD validation failed for response, ignoring validation.');
		}
		unlink($tempFilePrefix . '.xml');
		unlink($tempFilePrefix . '.xsd');

		$response = @\simplexml_load_string($responseText, "SimpleXMLElement");
		if (!$response) {
			if (stristr(
				$responseText,
				'Töltse fel a kérés xml fájlt, vagy a dokumentáció szerint küldje be az xml kérés adatait.'
			)) {
				$this->logger->notice('[request ' . $requestId . '] Invalid request <- HTTP ' . $httpResponse->getStatusCode());
				throw new Origo9Exception('API endpoint failed to parse our request');
			}
			$this->logger->notice('[request ' . $requestId . '] XML parsing failed <- HTTP ' . $httpResponse->getStatusCode());
			throw new Origo9Exception('Failed to decode XML response: ' . $responseText);
		}

		if ($response->getName() == 'Hiba' && !in_array((string)$response, $this->nonErrorErrors)) {
			$this->logger->notice('[request ' . $requestId . '] Error: ' . (string)$response . ' <- HTTP ' . $httpResponse->getStatusCode());
			throw new Origo9Exception((string)$response);
		}
		$this->logger->debug('[request ' . $requestId . '] XML <- HTTP ' . $httpResponse->getStatusCode());
		return $response;
	}

	/**
	 * @return ExportMegbizoResponse
	 * @throws Origo9Exception
	 */
	public function exportMegbizo() {
		$requestId = md5(mt_rand());
		$this->logger->debug('[request ' . $requestId . '] Starting "megbizo" request...');
		$response = $this->request('megbizo', $requestId);
		$this->logger->debug('[request ' . $requestId . '] HTTP call complete, decoding XML objects...');
		try {
			$responseObject = ExportMegbizoResponse::fromResponse($response);
		} catch (Origo9Exception $e) {
			$this->logger->notice('[request ' . $requestId . '] ' . $e->getMessage());
			throw $e;
		}
		$this->logger->debug('[request ' . $requestId . '] Request complete.');
		return $responseObject;
	}

	/**
	 * @return ExportIngatlanResponse
	 * @throws Origo9Exception
	 */
	public function exportIngatlan() {
		$requestId = md5(mt_rand());
		$this->logger->debug('[request ' . $requestId . '] Starting "ingatlan" request...');
		$response = $this->request('ingatlan', $requestId);
		$this->logger->debug('[request ' . $requestId . '] HTTP call complete, decoding XML objects...');
		try {
			$responseObject = ExportIngatlanResponse::fromResponse($response);
		} catch (Origo9Exception $e) {
			$this->logger->notice('[request ' . $requestId . '] ' . $e->getMessage());
			throw $e;
		}
		$this->logger->debug('[request ' . $requestId . '] Request complete.');
		return $responseObject;
	}
}
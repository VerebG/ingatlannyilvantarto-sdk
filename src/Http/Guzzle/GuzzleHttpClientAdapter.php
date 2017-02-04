<?php

namespace Janoszen\Ingatlannyilvantarto\Http\Guzzle;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Janoszen\Ingatlannyilvantarto\Http\HttpClientAdapter;
use Janoszen\Ingatlannyilvantarto\Http\HttpException;
use Psr\Http\Message\RequestInterface;

class GuzzleHttpClientAdapter implements HttpClientAdapter {
	/**
	 * @var Client
	 */
	private $client;

	public function __construct() {
		$this->client = new Client();
	}

	public function createRequest() {
		return new Request('GET', '/');
	}

	public function getEmptyUri() {
		return new Uri();
	}

	public function getStringStream($string) {
		return \GuzzleHttp\Psr7\stream_for($string);
	}

	public function request(RequestInterface $request) {
		try {
			return $this->client->send($request);
		} catch (ClientException $e) {
			if (!$e->getResponse()) {
				throw new HttpException($e->getMessage(), $e->getCode(), $e);
			}
			return $e->getResponse();
		}
	}
}
<?php

namespace Janoszen\Ingatlannyilvantarto\Http;

use Janoszen\Ingatlannyilvantarto\Http\HttpException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

interface HttpClientAdapter {
	/**
	 * @return RequestInterface
	 */
	public function createRequest();
	/**
	 * @return UriInterface
	 */
	public function getEmptyUri();
	/**
	 * @param string $string
	 *
	 * @return StreamInterface
	 */
	public function getStringStream($string);
	/**
	 * @param RequestInterface $request
	 *
	 * @return ResponseInterface
	 *
	 * @throws HttpException
	 */
	public function request(RequestInterface $request);
}

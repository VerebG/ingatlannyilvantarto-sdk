<?php

namespace Janoszen\Ingatlannyilvantarto\Origo9\Responses;

use Psr\Log\LoggerInterface;
use SimpleXMLElement;

abstract class AbstractResponse {
	/**
	 * @param SimpleXMLElement $response
	 * @return static
	 */
	abstract public static function fromResponse(SimpleXMLElement $response);
}
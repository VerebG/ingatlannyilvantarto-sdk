<?php

namespace Janoszen\Ingatlannyilvantarto\Origo9\Responses;

use Janoszen\Ingatlannyilvantarto\Origo9\WorkingObjects\Ingatlan;
use SimpleXMLElement;

class ExportIngatlanResponse extends AbstractResponse implements \IteratorAggregate {
	/**
	 * @var Ingatlan[]
	 */
	private $ingatlanok = [];

	/**
	 * @param Ingatlan[] $ingatlanok
	 */
	public function __construct($ingatlanok) {
		$this->ingatlanok = $ingatlanok;
	}

	/**
	 * @return Ingatlan[]
	 */
	public function getIngatlanok() {
		return $this->ingatlanok;
	}

	public function getIterator() {
		return new \ArrayIterator($this->ingatlanok);
	}

	public static function fromResponse(SimpleXMLElement $response) {
		$result = [];
		if ($response->getName() == 'Ingatlanok') {
			foreach ($response->children() as $child) {
				$result[] = Ingatlan::fromResponse($child);
			}
		}
		return new ExportIngatlanResponse($result);
	}
}
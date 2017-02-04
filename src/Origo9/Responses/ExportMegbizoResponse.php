<?php

namespace Janoszen\Ingatlannyilvantarto\Origo9\Responses;

use Janoszen\Ingatlannyilvantarto\Origo9\WorkingObjects\Megbizo;
use Psr\Log\LoggerInterface;
use SimpleXMLElement;
use Traversable;

class ExportMegbizoResponse extends AbstractResponse implements \IteratorAggregate {
	/**
	 * @var Megbizo[]
	 */
	private $megbizok = [];

	/**
	 * @param Megbizo[] $megbizok
	 */
	public function __construct($megbizok) {
		$this->megbizok = $megbizok;
	}

	/**
	 * @return Megbizo[]
	 */
	public function getMegbizok() {
		return $this->megbizok;
	}

	public function getIterator() {
		return new \ArrayIterator($this->megbizok);
	}

	public static function fromResponse(SimpleXMLElement $response) {
		$result = [];
		if ($response->getName() == 'Megbizok') {
			foreach ($response->children() as $child) {
				$result[] = Megbizo::fromResponse($child);
			}
		}
		return new ExportMegbizoResponse($result);
	}
}
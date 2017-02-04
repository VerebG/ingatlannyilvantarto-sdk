<?php

namespace Janoszen\Ingatlannyilvantarto\Origo9\WorkingObjects;

use Psr\Log\LoggerInterface;

class Helyiseg extends AbstractWorkingObject {
	/**
	 * @var int
	 */
	private $helyisegKOD;

	/**
	 * @var int
	 */
	private $helyisegTipusKOD;

	/**
	 * @var string
	 */
	private $helyisegTipusMegnevezes;

	/**
	 * @var int
	 */
	private $burkolatKOD;

	/**
	 * @var string
	 */
	private $burkolatMegnevezes;

	/**
	 * @var int
	 */
	private $meret;

	/**
	 * @var int
	 */
	private $teraszMeret;

	/**
	 * @var bool
	 */
	private $lakoHelyiseg;

	/**
	 * @var string
	 */
	private $megjegyzes;

	/**
	 * Helyiseg constructor.
	 * @param int $helyisegKOD
	 * @param int $helyisegTipusKOD
	 * @param string $helyisegTipusMegnevezes
	 * @param int $burkolatKOD
	 * @param string $burkolatMegnevezes
	 * @param int $meret
	 * @param int $teraszMeret
	 * @param bool $lakoHelyiseg
	 * @param string $megjegyzes
	 */
	public function __construct(
		$helyisegKOD,
		$helyisegTipusKOD,
		$helyisegTipusMegnevezes,
		$burkolatKOD,
		$burkolatMegnevezes,
		$meret,
		$teraszMeret,
		$lakoHelyiseg,
		$megjegyzes
	) {
		$this->helyisegKOD = $helyisegKOD;
		$this->helyisegTipusKOD = $helyisegTipusKOD;
		$this->helyisegTipusMegnevezes = $helyisegTipusMegnevezes;
		$this->burkolatKOD = $burkolatKOD;
		$this->burkolatMegnevezes = $burkolatMegnevezes;
		$this->meret = $meret;
		$this->teraszMeret = $teraszMeret;
		$this->lakoHelyiseg = $lakoHelyiseg;
		$this->megjegyzes = $megjegyzes;
	}

	/**
	 * @return int
	 */
	public function getHelyisegKOD() {
		return $this->helyisegKOD;
	}

	/**
	 * @return int
	 */
	public function getHelyisegTipusKOD() {
		return $this->helyisegTipusKOD;
	}

	/**
	 * @return string
	 */
	public function getHelyisegTipusMegnevezes() {
		return $this->helyisegTipusMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getBurkolatKOD() {
		return $this->burkolatKOD;
	}

	/**
	 * @return string
	 */
	public function getBurkolatMegnevezes() {
		return $this->burkolatMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getMeret() {
		return $this->meret;
	}

	/**
	 * @return int
	 */
	public function getTeraszMeret() {
		return $this->teraszMeret;
	}

	/**
	 * @return bool
	 */
	public function getLakoHelyiseg() {
		return $this->lakoHelyiseg;
	}

	/**
	 * @return string
	 */
	public function getMegjegyzes() {
		return $this->megjegyzes;
	}

	public static function fromResponse(\SimpleXMLElement $element) {
		return new Helyiseg(
			self::decodeInteger($element, 'HelyisegKOD'),
			self::decodeInteger($element, 'HelyisegTipusKOD'),
			self::decodeString($element, 'HelyisegTipusMegnevezes'),
			self::decodeInteger($element, 'BurkolatKOD'),
			self::decodeString($element, 'BurkolatMegnevezes'),
			self::decodeInteger($element, 'Meret'),
			self::decodeInteger($element, 'Terasz'),
			self::decodeBoolean($element, 'LakoHelyiseg'),
			self::decodeString($element, 'Megjegyzes', '')
		);
	}
}
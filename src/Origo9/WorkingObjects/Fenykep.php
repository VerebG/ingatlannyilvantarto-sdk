<?php

declare(strict_types = 1);


namespace Janoszen\Ingatlannyilvantarto\Origo9\WorkingObjects;


class Fenykep extends AbstractWorkingObject {
	/**
	 * @var int
	 */
	private $fenykepKod;
	/**
	 * @var int
	 */
	private $tipusKod;
	/**
	 * @var int
	 */
	private $sorszam;
	/**
	 * @var bool
	 */
	private $kiemelt;
	/**
	 * @var bool
	 */
	private $publikus;
	/**
	 * @var string
	 */
	private $utvonal;
	/**
	 * @var string
	 */
	private $fotoTipusMegnevezes;

	/**
	 * Fenykep constructor.
	 * @param int $fenykepKod
	 * @param int $tipusKod
	 * @param int $sorszam
	 * @param bool $kiemelt
	 * @param bool $publikus
	 * @param string $utvonal
	 * @param string $fotoTipusMegnevezes
	 */
	public function __construct($fenykepKod, $tipusKod, $sorszam, $kiemelt, $publikus, $utvonal, $fotoTipusMegnevezes) {
		$this->fenykepKod = $fenykepKod;
		$this->tipusKod = $tipusKod;
		$this->sorszam = $sorszam;
		$this->kiemelt = $kiemelt;
		$this->publikus = $publikus;
		$this->utvonal = $utvonal;
		$this->fotoTipusMegnevezes = $fotoTipusMegnevezes;
	}

	/**
	 * @return int
	 */
	public function getFenykepKod() {
		return $this->fenykepKod;
	}

	/**
	 * @return int
	 */
	public function getTipusKod() {
		return $this->tipusKod;
	}

	/**
	 * @return int
	 */
	public function getSorszam() {
		return $this->sorszam;
	}

	/**
	 * @return bool
	 */
	public function getKiemelt() {
		return $this->kiemelt;
	}

	/**
	 * @return bool
	 */
	public function getPublikus() {
		return $this->publikus;
	}

	/**
	 * @return string
	 */
	public function getUtvonal() {
		return $this->utvonal;
	}

	/**
	 * @return string
	 */
	public function getFotoTipusMegnevezes() {
		return $this->fotoTipusMegnevezes;
	}

	public static function fromResponse(\SimpleXMLElement $element) {
		return new Fenykep(
			self::decodeInteger($element, 'FenykepKOD'),
			self::decodeInteger($element, 'TipusKOD'),
			self::decodeInteger($element, 'Sorszam'),
			self::decodeBoolean($element, 'Kiemelt'),
			self::decodeBoolean($element, 'Publikus'),
			self::decodeString($element, 'Utvonal'),
			self::decodeString($element, 'FotoTipusMegnevezes')
		);
	}
}
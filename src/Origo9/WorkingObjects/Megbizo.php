<?php

namespace Janoszen\Ingatlannyilvantarto\Origo9\WorkingObjects;

use Psr\Log\LoggerInterface;
use SimpleXMLElement;

class Megbizo extends AbstractWorkingObject {
	/**
	 * @var int
	 */
	private $kod;

	/**
	 * @var int
	 */
	private $rogzitUgyintezoKod;

	/**
	 * @var int
	 */
	private $irodaKod;

	/**
	 * @var string
	 */
	private $megnevezes;

	/**
	 * @var string
	 */
	private $telefon;

	/**
	 * @var string
	 */
	private $fax;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * @var string
	 */
	private $cim;

	/**
	 * @var string
	 */
	private $azonositoOkmany;

	/**
	 * @var string
	 */
	private $rogzitUgyintezoNev;

	/**
	 * @var \DateTime
	 */
	private $modositasDatuma;

	/**
	 * @var string
	 */
	private $irodaNev;

	/**
	 * @var string
	 */
	private $megjegyzes;

	/**
	 * Megbizo constructor.
	 * @param int $kod
	 * @param int $rogzitUgyintezoKod
	 * @param int $irodaKod
	 * @param string $megnevezes
	 * @param string $telefon
	 * @param string $fax
	 * @param string $email
	 * @param string $cim
	 * @param string $azonositoOkmany
	 * @param string $rogzitUgyintezoNev
	 * @param \DateTime $modositasDatuma
	 * @param string $irodaNev
	 * @param string $megjegyzes
	 */
	public function __construct(
		$kod,
		$rogzitUgyintezoKod,
		$irodaKod,
		$megnevezes,
		$telefon,
		$fax,
		$email,
		$cim,
		$azonositoOkmany,
		$rogzitUgyintezoNev,
		\DateTime $modositasDatuma,
		$irodaNev,
		$megjegyzes
	) {
		$this->kod = $kod;
		$this->rogzitUgyintezoKod = $rogzitUgyintezoKod;
		$this->irodaKod = $irodaKod;
		$this->megnevezes = $megnevezes;
		$this->telefon = $telefon;
		$this->fax = $fax;
		$this->email = $email;
		$this->cim = $cim;
		$this->azonositoOkmany = $azonositoOkmany;
		$this->rogzitUgyintezoNev = $rogzitUgyintezoNev;
		$this->modositasDatuma = $modositasDatuma;
		$this->irodaNev = $irodaNev;
		$this->megjegyzes = $megjegyzes;
	}

	/**
	 * @param SimpleXMLElement $response
	 * @return static
	 */
	public static function fromResponse(SimpleXMLElement $response) {
		return new Megbizo(
			self::decodeInteger($response, 'MegbizoKOD'),
			self::decodeInteger($response, 'RogzitUgyintezoKOD'),
			self::decodeInteger($response, 'IrodaKOD'),
			self::decodeString($response, 'Megnevezes', ''),
			self::decodeString($response, 'Telefon', ''),
			self::decodeString($response, 'Fax', ''),
			self::decodeString($response, 'Email', ''),
			self::decodeString($response, 'Cim', ''),
			self::decodeString($response, 'AzonositoOkmany', ''),
			self::decodeString($response, 'RogzitUgyintezoNev'),
			self::decodeDateTime($response, 'ModositasDatuma'),
			self::decodeString($response, 'IrodaNev'),
			self::decodeString($response, 'Megjegyzes', '')
		);
	}
}
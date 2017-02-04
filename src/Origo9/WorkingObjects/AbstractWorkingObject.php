<?php

namespace Janoszen\Ingatlannyilvantarto\Origo9\WorkingObjects;

use Janoszen\Ingatlannyilvantarto\Origo9\Exceptions\Origo9Exception;
use SimpleXMLElement;

abstract class AbstractWorkingObject {
	/**
	 * @param SimpleXMLElement $element
	 * @param $member
	 * @param null $defaultValue
	 * @param bool $nullable
	 * @return SimpleXMLElement
	 * @throws Origo9Exception
	 */
	protected static function getValue(SimpleXmlElement $element, $member, $defaultValue = null, $nullable = false) {
		if (!property_exists($element->children(), $member)) {
			if ($defaultValue !== null || $nullable) {
				return $defaultValue;
			} else {
				throw new Origo9Exception('XML decoding failed: missing element ' . $member . ' on ' . $element->getName());
			}
		}
		/** @noinspection PhpIncompatibleReturnTypeInspection */
		return $element->children()->$member;
	}

	/**
	 * @param SimpleXMLElement $element
	 * @param string $member
	 * @param int $defaultValue
	 * @param bool $nullable
	 * @return int
	 * @throws Origo9Exception
	 */
	protected static function decodeInteger(SimpleXmlElement $element, $member, $defaultValue = null, $nullable = false) {
		$value = (string)self::getValue($element, $member, $defaultValue, $nullable);
		if (empty($value) && $nullable) {
			return null;
		}
		if (!preg_match('/^(\+|\-|)[0-9]+\Z/', $value)) {
			throw new Origo9Exception('XML decoding failed: Invalid integer value: ' . $value . ' on ' . $member . ' of ' . $element->getName());
		}
		return (int)$value;
	}

	/**
	 * @param SimpleXMLElement $element
	 * @param string $member
	 * @param float|null $defaultValue
	 * @param bool $nullable
	 * @return float
	 * @throws Origo9Exception
	 */
	protected static function decodeFloat(SimpleXmlElement $element, $member, $defaultValue = null, $nullable = false) {
		$value = (string)self::getValue($element, $member, $defaultValue, $nullable);
		if ($value === '' && $nullable) {
			return null;
		}
		if (!preg_match('/^(\+|\-|)[0-9]+(|\.[0-9]+)\Z/', $value)) {
			throw new Origo9Exception('XML decoding failed: Invalid float value: ' . $value . ' on ' . $member . ' of ' . $element->getName());
		}
		return (float)$value;
	}


	/**
	 * @param SimpleXMLElement $element
	 * @param string $member
	 * @param bool|null $defaultValue
	 * @param bool $nullable
	 * @return bool
	 * @throws Origo9Exception
	 */
	protected static function decodeBoolean(SimpleXmlElement $element, $member, $defaultValue = null, $nullable = false) {
		$value = (string)self::getValue($element, $member, $defaultValue, $nullable);
		if ($value === '' && $nullable) {
			return null;
		}

		if ($value === '0') {
			return false;
		} else if ($value === '1') {
			return true;
		} else {
			throw new Origo9Exception('XML decoding failed: Invalid boolean value: ' . $value . ' on ' . $member . ' of ' . $element->getName());
		}
	}

	/**
	 * @param SimpleXMLElement $element
	 * @param string $member
	 * @param \DateTime|null $defaultValue
	 * @param bool $nullable
	 * @return \DateTime
	 * @throws Origo9Exception
	 */
	protected static function decodeDateTime(SimpleXmlElement $element, $member, \DateTime $defaultValue = null, $nullable = false) {
		$value = (string)self::getValue($element, $member, $defaultValue, $nullable);
		if ($value === '' && $nullable) {
			return null;
		}
		if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\Z/', $value)) {
			throw new Origo9Exception('XML decoding failed: Invalid datetime value: ' . $value . ' on ' . $member . ' of ' . $element->getName());
		}
		return new \DateTime($value);
	}

	/**
	 * @param SimpleXMLElement $element
	 * @param string $member
	 * @param string|null $defaultValue
	 * @param bool $nullable
	 * @return null|string
	 */
	protected static function decodeString(SimpleXmlElement $element, $member, $defaultValue = null, $nullable = false) {
		return (string)self::getValue($element, $member, $defaultValue, $nullable);
	}
}
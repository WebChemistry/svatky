<?php

declare(strict_types=1);

namespace WebChemistry;

class NameDay {

	/** @var array */
	protected static $dates = [];

	/** @var array */
	protected static $names = [];

	private function __construct() {}

	/**
	 * @return array
	 */
	public static function getNames(): array {
		if (!self::$names) {
			self::$names = require __DIR__ . '/../data/names.php';
		}

		return self::$names;
	}

	/**
	 * @return array
	 */
	public static function getDates(): array {
		if (!self::$dates) {
			self::$dates = require __DIR__ . '/../data/dates.php';
		}

		return self::$dates;
	}

	protected static function normalize(string $str): string {
		return mb_strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', trim($str)), 'UTF-8');
	}

	/**
	 * @param string $name
	 * @return Date
	 * @throws NameDayException
	 */
	public static function getByName(string $name): Date {
		$normalized = self::normalize($name);
		if (!isset(self::getNames()[$normalized])) {
			throw new NameDayException("Date for name $name not found.");
		}

		return new Date(...self::getNames()[$normalized]);
	}

	/**
	 * @param \DateTime $dateTime
	 * @return Name
	 */
	public static function getByDateTime(\DateTime $dateTime): Name {
		return self::get((int) $dateTime->format('j'), (int) $dateTime->format('n'));
	}

	/**
	 * @param int $timestamp
	 * @return Name
	 */
	public static function getByTimestamp(int $timestamp): Name {
		return self::get((int) date('j', $timestamp), (int) date('n', $timestamp));
	}

	/**
	 * @return Name
	 */
	public static function getToday(): Name {
		return self::getByTimestamp(time());
	}

	/**
	 * @return Name
	 */
	public static function getTomorrow(): Name {
		return self::getByDateTime(new \DateTime('tomorrow'));
	}

	/**
	 * @return Name
	 */
	public static function getYesterday(): Name {
		return self::getByDateTime(new \DateTime('yesterday'));
	}

	/**
	 * @param int $day
	 * @param int $month
	 * @return Name
	 * @throws NameDayException
	 */
	public static function get(int $day, int $month): Name {
		if (!isset(self::getDates()[$month][$day])) {
			throw new NameDayException("Name day not exists for $day:$month");
		}

		return new Name(self::getDates()[$month][$day]);
	}

}

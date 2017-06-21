<?php

declare(strict_types=1);

namespace WebChemistry;

final class Date {

	/** @var int */
	private $day;

	/** @var int */
	private $month;

	/**
	 * @param int $day
	 * @param int $month
	 */
	public function __construct(int $day, int $month) {
		$this->day = $day;
		$this->month = $month;
	}

	/**
	 * @return int
	 */
	public function getDay(): int {
		return $this->day;
	}

	/**
	 * @return int
	 */
	public function getMonth(): int {
		return $this->month;
	}

	/**
	 * @return \DateTime
	 */
	public function toDateTime(): \DateTime {
		return new \DateTime(date('Y') . "-{$this->month}-{$this->day}");
	}

	/**
	 * @return int
	 */
	public function toTimestamp(): int {
		return $this->toDateTime()->getTimestamp();
	}

	/**
	 * @return string
	 */
	public function __toString(): string {
		return $this->day . '.' . $this->month;
	}

}

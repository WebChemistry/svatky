<?php

declare(strict_types=1);

namespace WebChemistry;

final class Name {

	/** @var string[] */
	private $names;

	/**
	 * @param string[] $names
	 */
	public function __construct(array $names) {
		$this->names = $names;
	}

	/**
	 * @return string[]
	 */
	public function getNames(): array {
		return $this->names;
	}

	/**
	 * @return string
	 */
	public function __toString(): string {
		return implode(', ', $this->names);
	}

}

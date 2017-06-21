<?php

use WebChemistry\Name;
use WebChemistry\NameDay;

class NamesTest extends \Codeception\Test\Unit {

	public function testName() {
		$name = NameDay::get(1, 1);

		$this->assertInstanceOf(Name::class, $name);
		$this->assertSame(['Nový rok'], $name->getNames());
		$this->assertSame('Nový rok', (string) $name);
	}

	public function testNames() {
		$name = NameDay::get(2, 2);

		$this->assertSame(['Nela', 'Hromnice'], $name->getNames());
		$this->assertSame('Nela, Hromnice', (string) $name);
	}

	public function testDateTime() {
		$name = NameDay::getByDateTime(new \DateTime('2017-01-01'));

		$this->assertInstanceOf(Name::class, $name);
		$this->assertSame(['Nový rok'], $name->getNames());
		$this->assertSame('Nový rok', (string) $name);
	}

	public function testTimestamp() {
		$name = NameDay::getByTimestamp((new \DateTime('2017-01-01'))->getTimestamp());

		$this->assertInstanceOf(Name::class, $name);
		$this->assertSame(['Nový rok'], $name->getNames());
		$this->assertSame('Nový rok', (string) $name);
	}

	public function testMethods() {
		$this->assertInstanceOf(Name::class, NameDay::getTomorrow());
		$this->assertInstanceOf(Name::class, NameDay::getYesterday());
		$this->assertInstanceOf(Name::class, NameDay::getToday());
	}

}

<?php

use WebChemistry\Date;
use WebChemistry\NameDay;

class DatesTest extends \Codeception\Test\Unit {

	public function testDate() {
		$date = NameDay::getByName(' Nový rok');

		$this->assertInstanceOf(Date::class, $date);
		$this->assertSame(1, $date->getDay());
		$this->assertSame(1, $date->getMonth());
		$this->assertEquals(new \DateTime(date('Y') . '-01-01'), $date->toDateTime());
		$this->assertSame((new \DateTime(date('Y') . '-01-01'))->getTimestamp(), $date->toTimestamp());
		$this->assertSame('1.1', (string) $date);
	}

	public function testDate2() {
		$date = NameDay::getByName('rehor');

		$this->assertInstanceOf(Date::class, $date);
		$this->assertSame(12, $date->getDay());
		$this->assertSame(3, $date->getMonth());
		$this->assertEquals(new \DateTime(date('Y') . '-03-12'), $date->toDateTime());
		$this->assertSame((new \DateTime(date('Y') . '-03-12'))->getTimestamp(), $date->toTimestamp());
		$this->assertSame('12.3', (string) $date);
	}

	public function testDate3() {
		$date = NameDay::getByName('sona');

		$this->assertInstanceOf(Date::class, $date);
		$this->assertSame(28, $date->getDay());
		$this->assertSame(3, $date->getMonth());
		$this->assertEquals(new \DateTime(date('Y') . '-03-28'), $date->toDateTime());
		$this->assertSame((new \DateTime(date('Y') . '-03-28'))->getTimestamp(), $date->toTimestamp());
		$this->assertSame('28.3', (string) $date);
	}

}

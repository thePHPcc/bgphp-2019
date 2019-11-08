<?php declare(strict_types=1);

namespace bgphp;

use PHPUnit\Framework\TestCase;

class AmadeusFlightNumberValidatorTest extends TestCase
{
    public function testReturnsTrueWhenFlightNumberIsValid(): void
    {
        $adapter = new AmadeusFlightNumberValidator;

        $this->assertTrue($adapter->isValid(new FlightNumber('LH 1984')));
    }

    public function testReturnsFalseWhenFlightNumberIsInvalid(): void
    {
        $adapter = new AmadeusFlightNumberValidator;

        $this->assertFalse($adapter->isValid(new FlightNumber('LH 198')));
    }
}

<?php declare(strict_types=1);

namespace bgphp;

use PHPUnit\Framework\TestCase;

class FlightNumberTest extends TestCase
{
    public function testCanBeConvertedToString(): void
    {
        $flightNumber = 'LH 1984';
        $this->assertEquals(
            $flightNumber,
            (new FlightNumber($flightNumber))->asString()
        );
    }

    public function testFlightMustBeLufthansa(): void
    {
        $this->expectException(InvalidFlightNumberException::class);
        $this->expectExceptionMessage('Invalid flight number');

        new FlightNumber('XX 1984');
    }
}

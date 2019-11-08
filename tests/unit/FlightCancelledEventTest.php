<?php declare(strict_types=1);

namespace bgphp;

use PHPUnit\Framework\TestCase;

class FlightCancelledEventTest extends TestCase
{
    public function testHasFlightNumber(): void
    {
        $flightNumber = new FlightNumber('LH 1984');
        $event = new FlightCancelledEvent($flightNumber);

        $this->assertEquals($flightNumber, $event->flightNumber());
    }
}

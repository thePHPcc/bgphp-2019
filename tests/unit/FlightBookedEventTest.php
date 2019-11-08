<?php declare(strict_types=1);

namespace bgphp;

use PHPUnit\Framework\TestCase;

class FlightBookedEventTest extends TestCase
{
    /**
     * @var FlightNumber
     */
    private $flightNumber;

    /**
     * @var Passenger
     */
    private $passenger;

    /**
     * @var FlightBookedEvent
     */
    private $event;

    protected function setUp(): void
    {
        $this->flightNumber = new FlightNumber('LH 1984');
        $this->passenger = new Passenger('Stefan Priebsch');

        $this->event = new FlightBookedEvent($this->flightNumber, $this->passenger);
    }

    public function testHasFlightNumber(): void
    {
        $this->assertEquals($this->flightNumber, $this->event->flightNumber());
    }

    public function testHasPassenger(): void
    {
        $this->assertEquals($this->passenger, $this->event->passenger());
    }
}

<?php declare(strict_types=1);

namespace bgphp;

class FlightBookedEvent
{
    /**
     * @var string
     */
    private $flightNumber;

    /**
     * @var Passenger
     */
    private $passenger;

    public function __construct(FlightNumber $flightNumber, Passenger $passenger)
    {
        $this->flightNumber = $flightNumber;
        $this->passenger = $passenger;
    }

    public function flightNumber(): FlightNumber
    {
        return $this->flightNumber;
    }

    public function passenger(): Passenger
    {
        return $this->passenger;
    }
}

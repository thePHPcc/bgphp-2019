<?php declare(strict_types=1);

namespace bgphp;

class FlightCancelledEvent
{
    /**
     * @var string
     */
    private $flightNumber;

    public function __construct(FlightNumber $flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    public function flightNumber(): FlightNumber
    {
        return $this->flightNumber;
    }
}

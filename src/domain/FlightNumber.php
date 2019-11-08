<?php declare(strict_types=1);

namespace bgphp;

class FlightNumber
{
    /**
     * @var string
     */
    private $flightNumber;

    public function __construct(string $flightNumber)
    {
        if (substr($flightNumber, 0, 2) !== 'LH') {
            throw new InvalidFlightNumberException('Invalid flight number');
        }

        $this->flightNumber = $flightNumber;
        // more validation might be needed here
    }

    public function asString(): string
    {
        return $this->flightNumber;
    }

}

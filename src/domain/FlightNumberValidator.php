<?php declare(strict_types=1);

namespace bgphp;

interface FlightNumberValidator
{
    public function isValid(FlightNumber $flightNumber): bool;
}

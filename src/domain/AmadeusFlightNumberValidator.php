<?php

namespace bgphp;

class AmadeusFlightNumberValidator implements FlightNumberValidator
{
    public function isValid(FlightNumber $flightNumber): bool
    {
        $request = \AmadeusLibrary::createRequest('LH 1984', 'DE...');
        $result = \AmadeusLibrary::sendRequest($request);

        // Of course we are faking it here ...
        $parts = explode(' ', $flightNumber->asString());

        return ((int) $parts[1] >= 1000);
    }
}

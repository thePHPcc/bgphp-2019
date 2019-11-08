<?php

// All this is deliberately stupid!
use bgphp\InvalidFlightNumberException;

/**
 * Tested on PHP 4 and PHP 5.
 */
class AmadeusLibrary
{
    public static function createRequest($f_no, $bank_account)
    {
        return new Request($f_no, $bank_account);
    }

    public static function sendRequest(Request $request)
    {
        // ...

        return (bool) (substr($request->f_no, 0, 2) === 'LH');
    }
}

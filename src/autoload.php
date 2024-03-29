<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'amadeuslibrary' => '/library/AmadeusLibrary.php',
                'bgphp\\amadeusflightnumbervalidator' => '/domain/AmadeusFlightNumberValidator.php',
                'bgphp\\flightbookedevent' => '/domain/FlightBookedEvent.php',
                'bgphp\\flightcancelledevent' => '/domain/FlightCancelledEvent.php',
                'bgphp\\flightnumber' => '/domain/FlightNumber.php',
                'bgphp\\flightnumbervalidator' => '/domain/FlightNumberValidator.php',
                'bgphp\\invalidflightnumberexception' => '/domain/InvalidFlightNumberException.php',
                'bgphp\\passenger' => '/domain/Passenger.php',
                'request' => '/library/Request.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd

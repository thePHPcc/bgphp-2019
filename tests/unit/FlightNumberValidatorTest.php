<?php declare(strict_types=1);

namespace bgphp;

use PHPUnit\Framework\TestCase;

class FlightNumberValidatorTest extends TestCase
{
    public function testSuccessfulValidationOneWay(): void
    {
        $flightNumber = new FlightNumber('LH 1984');

        $validator = $this->createStub(FlightNumberValidator::class);
        $validator->method('isValid')->willReturn(true);

        $this->assertTrue($validator->isValid($flightNumber));
    }

    public function testSuccessfulValidationAnotherWay(): void
    {
        $flightNumber = new FlightNumber('LH 1984');

        $validator = new SuccessfulFlightNumberValidatorStub;

        $this->assertTrue($validator->isValid($flightNumber));
    }
}

class SuccessfulFlightNumberValidatorStub implements FlightNumberValidator
{
    public function isValid(FlightNumber $flightNumber): bool
    {
        return true;
    }
}

class FailingFlightNumberValidatorStub implements FlightNumberValidator
{
    public function isValid(FlightNumber $flightNumber): bool
    {
        return false;
    }
}

class AnotherFlightNumberValidatorStub implements FlightNumberValidator
{
    private $flag;

    public function __construct(bool $flag)
    {
        $this->flag = $flag;
    }

    public function isValid(FlightNumber $flightNumber): bool
    {
        return $this->flag;
    }
}

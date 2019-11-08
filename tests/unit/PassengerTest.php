<?php declare(strict_types=1);

namespace bgphp;

use PHPUnit\Framework\TestCase;

class PassengerTest extends TestCase
{
    public function testHasName(): void
    {
        $passenger = 'Stefan Priebsch';
        $this->assertEquals(
            $passenger,
            (new Passenger($passenger))->name()
        );
    }
}

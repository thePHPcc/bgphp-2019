<?php declare(strict_types=1);

class AmadeusTest extends PHPUnit\Framework\TestCase
{
    public function testFlightNumberValidation(): void
    {
        $request = AmadeusLibrary::createRequest('LH 1984', 'DE...');
        $result = AmadeusLibrary::sendRequest($request);

        $this->assertTrue($result);
    }
}

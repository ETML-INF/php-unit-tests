<?php
include(__DIR__ . '/../nombreEntier.php');

use PHPUnit\Framework\TestCase;

final class PrimeNumberTest extends TestCase
{
    public function testPrimeNumber(): void
    {
        $this->assertTrue(primeNumber(11));
    }

    public function testNotPrimeNumber(): void
    {
        $this->assertFalse(primeNumber(8));
    }
}
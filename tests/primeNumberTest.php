<?php
include(__DIR__ . '/../src/primeNumber.php');

use PHPUnit\Framework\TestCase;

final class primeNumberTest extends TestCase
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
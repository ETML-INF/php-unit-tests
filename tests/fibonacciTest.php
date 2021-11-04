<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../src/fibonacci.php");

class fibonacciTest extends TestCase
{
    public function test_fibonacci()
    {
        // Bloc assert
        $this->assertEquals(array_sum(fibonacci(3)), 2);
        $this->assertEquals(array_sum(fibonacci(4)), 4);
        $this->assertEquals(array_sum(fibonacci(5)), 7);
    }
}

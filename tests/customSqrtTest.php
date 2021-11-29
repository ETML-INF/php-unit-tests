<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../src/customSqrt.php");

class customSqrtTest extends TestCase
{
    public function test_customSqrtTrue()
    {
        // Bloc assert
        $this->assertEquals(customSqrt(9), 9);    
    }

    public function test_customSqrtFalse()
    {
        // Bloc assert
        $this->assertNotEquals(customSqrt(2), 2);    
    }
}
<?php

use PHPUnit\Framework\TestCase;
include(dirname(__FILE__)."/../src/leap.php");

class leapTest extends TestCase
{
   
    public function test_leap_with_leap_year()
    {
        // Bloc act
        $isLeapYear = leap(2000);

        // Bloc assert
        $this->assertTrue($isLeapYear);
    }

    public function test_leap_with_no_leap_year()
    {
        // Bloc act
        $isLeapYear = leap(2021);

        // Bloc assert
        $this->assertFalse($isLeapYear);
    }

}
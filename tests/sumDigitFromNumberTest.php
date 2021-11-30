<?php
include (dirname(__FILE__)."/../src/sumDigitFromNumber.php");

use PHPUnit\Framework\TestCase;

class sumDigitFromNumberProduct extends TestCase
{
    public function testSumDigitFromNumber(){

        $result = sumDigitFromNumber(87);

        $this->assertEquals($result,15);

    }

    public function testSumDigitFromNumber2(){

        $result = sumDigitFromNumber(102);
        $this->assertEquals($result, false);
    }
}
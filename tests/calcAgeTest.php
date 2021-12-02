<?php

include (dirname(__FILE__)."/../src/calcAge.php");

use PHPUnit\Framework\TestCase;

class calcAgeTest extends TestCase
{
    public function testCalcAge(){

        //Bloc act
        $result = calcAge("04/01/1992");

        //Bloc assert
        $this->assertEquals($result, 29); 
    }
}


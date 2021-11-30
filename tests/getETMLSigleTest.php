<?php

use PHPUnit\Framework\TestCase;
include(dirname(__FILE__) .  "/../src/getETMLSigle.php");

class getETMLSigleTest extends TestCase
{    
    public function test_getETMLSigleTest() {

        $result = getETMLSigle("Nicolas Berdoz");

        // Bloc assert
        $this->assertEquals('NBZ', $result);   
    }
}
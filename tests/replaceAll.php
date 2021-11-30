<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../src/replaceAll.php");


class getNumOfWordsTest extends TestCase
{

    public function test_methode1()
    {
        // Bloc act
        $subject = "E 126 ALL01 E02_NAS";
        $search  = ' ';
        $replace = '-';
        $result = replaceAll($search, $replace, $subject);

        // Bloc assert
        $this->assertEquals("E-126-ALL01-E02_NAS", $result);
    }
}

<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../src/StringReplacePHP.php");


class getNumOfWordsTest extends TestCase
{

    public function test_methode1()
    {
        // Bloc act
        $subject = "E 126 ALL01 E02_NAS";
        $search  = ' ';
        $replace = '-';

        // Bloc assert
        $this->assertEquals("E-126-ALL01-E02_NAS", str_replace($search, $replace, $subject));
    }
}

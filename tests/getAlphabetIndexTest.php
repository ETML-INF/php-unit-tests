<?php

$path = dirname(__FILE__)."/../getAlphabetIndex.php";
var_dump($path);
include($path);

use PHPUnit\Framework\TestCase;

class getAlphabetIndexTest extends TestCase
{
    //Test with a letter 
    public function testGetAlphabetIndexWithLetter(){
        $result = getAlphabetIndex("c");

        $this->assertEquals($result, 3);
    }

    //Test with a wrong character
    public function testGetAlphabetIndexWithWrongChar(){
        $result = getAlphabetIndex("&");

        $this->assertEquals($result, false);
    }
}
?>
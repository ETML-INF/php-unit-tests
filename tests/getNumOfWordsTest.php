<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../src/getNumOfWords.php");


class getNumOfWordsTest extends TestCase
{

    public function test_sentence_with_normal_space()
    {
        // Bloc act
        $str = "Ceci est une phrase normale.";
        $count = GetNumOfWords($str);

        // Bloc assert
        $this->assertEquals(5, $count);
    }

    public function test_sentence_with_many_spaces()
    {
        // Bloc act
        $str = "Ceci         est        une phrase       normale.";
        $count = GetNumOfWords($str);

        // Bloc assert
        $this->assertEquals(5, $count);
    }
}

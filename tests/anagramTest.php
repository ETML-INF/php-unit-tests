<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__)."/../src/anagram.php");

final class anagramTest extends TestCase
{
    public function test_anagram_ok()
    {
        $isAnagram = isAnagram('pool','polo');

        $this->assertTrue($isAnagram);
    }

    public function test_anagram_ok_2()
    {
        $isAnagram = isAnagram('nectar','carnet');

        $this->assertTrue($isAnagram);
    }

    public function test_anagram_ko()
    {
        $isAnagram = isAnagram('pool','polu');

        $this->assertFalse($isAnagram);
    }
}

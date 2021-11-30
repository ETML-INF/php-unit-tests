<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . "\..\src\countLetterInSentence.php");

final class countLetterInSentenceTest extends TestCase
{
    public function testCountNumberOfT(): void
    {
        $numberA = countLetterInSentence("Salut à tous", 't');
        printf($numberA);
        $this->assertEquals($numberA, 2);
    }
}

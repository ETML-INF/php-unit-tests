<?php
use PHPUnit\Framework\TestCase;

$path = __DIR__."\..\src\countLetterInSentence.php";
require_once($path);

final class CountLetterInSentenceTest extends TestCase
{
    public function testCountNumberOfT() : void
    {
        $numberA = countLetterInSentence("Salut à tous", 't');
        printf($numberA);
        $this->assertEquals($numberA, 2);
    }
}

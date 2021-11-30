<?php
use PHPUnit\Framework\TestCase;

$path = __DIR__."\..\src\palindrome.php";
require_once($path);

final class palindromeTest extends TestCase
{
    public function testPalindrome(): void
    {
        $palindrome = "kayak";
        $this->assertEquals(palindrome($palindrome), true);
    }

    public function testNotPalindrome(): void
    {
        $word = "salut";
        $this->assertEquals(palindrome($word), false);
    }
}

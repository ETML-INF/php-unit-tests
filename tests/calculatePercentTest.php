<?php 

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__)."/../src/calculatePercent.php");

final class calculatePercentTest extends TestCase
{
    public function test_calculatePercent50()
    {
        // appel methode calculatePercent
        $result = calculatePercent(25, 50);
        $this->assertEquals(
            $result,
            50.0
        );
    }

    public function test_calculatePercent10()
    {
        // appel methode calculatePercent
        $result = calculatePercent(7, 70);
        $this->assertEquals(
            $result,
            10.0
        );
    }
}
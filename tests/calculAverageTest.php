<?php

use PHPUnit\Framework\TestCase;
include(dirname(__FILE__) . "/../src/calculAverage.php");

final class calculAverageTest extends TestCase
{
    public function testAverageCalcul()
    {
        $notesArray = array(6, 4, 3.5, 4.5);
        $moyenne = calculateAverage($notesArray); 
        $this->assertEquals($moyenne, 4.5);
    }

}
<?php

use PHPUnit\Framework\TestCase;

include(__DIR__ . "/../calculateVolumeRectangle.php");

final class calculateVolumeRectangleTest extends TestCase
{
    public function testVolumeRectangle()
    {
        $volume = CalculRectangle(3, 2, 5);     //Met des valeurs pour le rectangle
        
        $this->assertEquals($volume, 30);
    }
}
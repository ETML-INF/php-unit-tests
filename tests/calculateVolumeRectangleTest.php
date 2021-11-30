<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../src/calculateVolumeRectangle.php");

final class calculateVolumeRectangleTest extends TestCase
{
    public function test_VolumeRectangle()
    {
        $volume = CalculRectangle(3, 2, 5);     //Met des valeurs pour le rectangle

        $this->assertEquals($volume, 30);
    }
}

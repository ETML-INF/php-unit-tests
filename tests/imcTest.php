<?php

include (dirname(__FILE__)."/../src/imc.php");

use PHPUnit\Framework\TestCase;

class imcTest extends TestCase
{
    public function testIcmNoice(){

        //Bloc act
        $result = IMC(95, 181); //choisis les valeurs 95, 181 pour le poids et la taille

        //Bloc assert
        $this->assertEquals($result, 29);  //résultat est 29
    }
}


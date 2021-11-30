<?php

/**
 * Retourne une addition de deux chiffres provenant d'un nombre
 * 
 * Voici un exemple du fonctionnement du programme:
 * 84 => 8+4 = 12
 * 
 * comme on peut le constater:
 * -Le nombre choisis est couper en deux 
 * -les deux chiffres actuellements séparés d'additionnent pour donner la réponse
 */
function sumDigitFromNumber($number)
{
    if ($number > 0 && $number < 100) {
        if ($number > 9) {
            list($number1, $number2) = str_split($number);
            return $number1 + $number2;
        } elseif ($number < 10) {
            return $number;
        }
    } else {
        return false;
    }
}

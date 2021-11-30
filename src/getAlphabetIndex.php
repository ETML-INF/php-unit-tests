<?php

/**
 * Cette fonction permet de retourner la position d'une lettre de l'alphabet
 */
function getAlphabetIndex($letterEntered)
{
    $letter = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    foreach (array_values($letter) as $i => $arrayValue) {
        if (in_array($letterEntered, $letter)) {
            if ($letterEntered == $arrayValue) {
                $index = array_search($letterEntered, $letter);
                $index += 1;
                return $index;
            }
        } else {
            return false;
        }
    }
}

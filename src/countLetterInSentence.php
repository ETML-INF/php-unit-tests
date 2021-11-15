<?php

/** Fonction countLetterInSentence
 *
 * Fonction qui va retourner le nombre de fois où une lettre apparaît dans une phrase
 *
 */

function countLetterInSentence($string, $letter)
{
    $counter = 0;
    for ($x = 0; $x <= strlen($string) - 1; $x++) {
        if ($string[$x] == $letter) {
            $counter++;
        }
    }

    return $counter;
}

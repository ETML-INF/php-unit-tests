<?php

/** Fonction Palindrome
 *
 * Fonction qui va retourner un booléen (vrai / faux) si le mot 
 * que l'on lui donne est un palindrome ou non.
 * 
 * La fonction est sensible aux majuscules.
 * 
 * Un palindrome est un mot qui se lit la même chose dans les deux sens.
 * Exemple : Exécuter la fonction Palindrome sur "kayak" retourne vrai.
 * L'exécuter sur "Kayak" (avec une majuscule) retourne faux. 
 *
 */

function palindrome($string)
{
    $length = strlen($string);
    $isPalindrome = true;

    for ($x = 0; $x <= $length / 2; $x++) {
        //Compare la lettre x et la lettre longureur du mot - x 
        if ($string[$x] == $string[$length - $x - 1]) {
            $isPalindrome = true;
        } else {
            $isPalindrome = false;
            break;
        }
    }

    return $isPalindrome;
}

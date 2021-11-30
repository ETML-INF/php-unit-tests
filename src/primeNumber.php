<?php
/**
 * Retourne TRUE si le nombre que l'on écrit est premier.
 * Un nombre premier est un nombre qui est divisible par 1 ou par lui même.
 */
function primeNumber($the_integer) {
    // boucle de 2 au nombre Ã  tester
    for ($i = 2; $i < $the_integer; $i++) {
        // test du quotien de la division
        if ($the_integer % $i == 0) {
            return FALSE;
        }
    }
    return TRUE;
}
?>
<?php

/**
 * description en FR
 */
function primeNumber($the_integer) {
    //boucle de 2 au nombre Ã  tester
    for ($i = 2; $i < $the_integer; $i++) {
        //test du quotien de la division
        if ($the_integer % $i == 0) {
            return FALSE;
        }
    } 
    
    //Aucun n'a étais trouver c'est donc un nombre premier
    return TRUE;
}

/*echo "11 est un nb 1er ? " . primeNumber(11);
var_dump("\n 4 est un nb 1er ? " . primeNumber(4));
var_dump(primeNumber(4));
*/
?>
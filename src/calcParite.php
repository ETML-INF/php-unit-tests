<?php

/**
 * Fonction qui permet de tester le problème "boucle de parité"
 * Si le nombre est pair, on divise par 2
 * Si le nom est impair, on multiplie par 3 et on ajoute 1
 * 
 * Puis on recommence avec le resultat du calcul
 */

function calcParite($number, $dNumber = null, $nbCalc = 0)
{

    $print = false;
    if (empty($dNumber)) {
        $dNumber = $number;
    }

    if ($number == 1) {
        if ($print) echo $dNumber . ' --> 1 en '. $nbCalc." opérations";
        if ($print) echo "<br />___________________________________<br />";
        return 1;
    } else {


        if ($number % 2 == 1) {
            if ($print) echo $nbCalc.":: ".$number . " * 3 + 1 = ";
            $number = ($number * 3) + 1;
            if ($print) echo $number;
            if ($print) echo "</br >";
        } else {
            if ($print) echo $nbCalc.":: ".$number . " / 2 = ";
            $number = ($number / 2);
            if ($print) echo $number;
            if ($print) echo "</br >";
        }

        $nbCalc++;

        calcParite($number, $dNumber, $nbCalc);
    }
}

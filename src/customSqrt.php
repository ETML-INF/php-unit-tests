<?php

/**
 * Cette fonction permet de comparer la racine carrée d'un nombre avec la racine carrée de ce nombre arrondi à l'entier le plus proche
 */
function customSqrt($number)
{
    return sqrt($number) == round(sqrt($number));
}

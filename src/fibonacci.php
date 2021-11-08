<?php

/**
 * Retourne un tableau contenant la suite de Fibonacci
 * 
 * Voici un exemple de la suite de Fibonacci:
 * 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181
 * 
 * Comme on peut le constater: 
 * - la somme des 2 1ers éléments est égale au 3ème élément
 * - la somme des éléments 2 et 3 est égale au 4ème élément
 * - la somme des éléments 3 et 4 est égale au 5ème élément
 * - etc
 */
function Fibonacci($n)
{
    $fibo = [];

    if ($n < 3) {
        return $fibo;
    }

    $fibo[0] = 0;
    $fibo[1] = 1;
    $index = 2;
    while ($index < $n) {
        $fibo[$index] = $fibo[$index - 1] + $fibo[$index - 2];
        $index += 1;
    }
    return $fibo;
}

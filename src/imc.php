<?php
/**
 * IMC (indice de masse corporelle)  
 * Le calcul de l'IMC est le suivant:
 * On prend le poids(kg) de la personne et on le divise par la taille²(cm) de cette même personne.
 * 
 * Si l'IMC est en dessous de 19, l'IMC est trop petit
 * Si l'IMC est au dessus de 25, l'IMC est trop élevé
 * Entre les 2, il est parfait
 */
function IMC($poids, $taille){
    $imc = $poids / ($taille * $taille); //calcule de l'imc
    return ceil($imc * 10000); //retourne l'imc en entier
}
?>
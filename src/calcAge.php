<?php
/**
 * Fonction qui permet de calcuelr l'âge d'une personne en fonction de la date de naissance
 * Retourn l'âge.
 */

function calcAge($birthDate){
    // Récupère l'année actuel
    $actualYear = date("Y");
    // Extrait l'année de la date de naissance.
    $birthYear = date("Y", strtotime($birthDate));
    // Calcul l'âge de la personne
    $age = $actualYear - $birthYear;

    // un commentaire de test de commit
    return $age;
}
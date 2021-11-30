<?php
    /**
     * Le SIGLE ETML est composé de la manière suivante :
     * - 1ère lettre du prénom
     * - 1ère lettre du nom 
     * - et dernière lettre du nom
     */
    function getETMLSigle($nom){
        $nom_initiale = '';
        $n_mot = explode(" ",$nom);
        foreach($n_mot as $lettre){
            $lastLetter = substr($nom, -1);
            $nom_initiale .= $lettre[0];
            $result = $nom_initiale.$lastLetter;
        }
        return strtoupper($result);
    }
?>
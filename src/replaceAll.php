<?php

/**
 * Fonction qui permet de rechercher et remplacer le caractère 'search' par le caractère 'replace' dans une phrase
 */
function replaceAll($search, $replace, $subject)
{
    return str_replace($search, $replace, $subject);
}

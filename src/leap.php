<?php

/**
 * Retourne TRUE si l'année est bissextile. FALSE dans le cas contraire.
 * 
 * Pour être bissextile, une année est :
 * - soit divisible par 4 mais pas par 100 
 * - soit divisible par 400
 */
function leap($year)
{
	return (is_int($year / 4) && !is_int($year / 100)) || is_int($year / 400);
}

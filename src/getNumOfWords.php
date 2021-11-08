<?php

/*
* Retourne le nombre de mots dans la phrase spécifiée
*/
function GetNumOfWords($str)
{
    $count = 0;
    if($str != ""){
        $final = explode(" ",$str);
        foreach($final as $value)
        if($value != "")
        ++$count;
        return $count;
    }
    else{
        return 0;
    }
}

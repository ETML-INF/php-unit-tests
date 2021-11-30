<?php
    function getAlphabetIndex($letterEntered){
        $letter = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
        foreach(array_values($letter) as $i => $arrayValue)
        {
            if(in_array($letterEntered, $letter)){
                if($letterEntered == $arrayValue){
                    $index = array_search($letterEntered, $letter);
                    $index += 1;
                    echo "Valeur de la lettre : ".$index;
                    return $index;
                }
            }
            else{
                echo "La lettre n'existe pas, veuillez entrer une lettre valide (entre \"A\" et \"Z\", pas de caractères spécieaux ou d'accents)";
                return false;
            }
        }

    }

   // getAlphabetIndex("c");
?>
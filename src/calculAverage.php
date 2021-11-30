<?php
    /**
     * Cette fonction a pour but de calculer la moyenne des notes passées en paramètre dans un tableau
     */
    function calculateAverage($notesArray)
    {
        $sum = 0;
        foreach ($notesArray as $note)
        {
            $sum += $note;
        }
        return $sum / count($notesArray);
    }

<?php

function feuxDeSignalisation(string $lesCouleurs): string
{
    $couleur = strtolower($couleur);
    
        if($couleur === 'vert'){

            return "vous passer";
        }

        elseif($couleur === 'orange'){

            return "Ralentissez";
        }

        elseif($couleur === 'rouge'){

            return "S'arretez";
        }

        else{

            return "Couleur inconnue";
        }
    }

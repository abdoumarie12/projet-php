<?php


function valeurAbsolu(int $nbr1, int $nbr2): string
{

    $difference = $nbr1 - $nbr2;

    $valeurAbsolue = null;

   if ($difference >= 0) {

        $valeurAbsolue = $difference;
        echo "la valeur absolue de la différence est : " . $valeurAbsolue;
    }


   $valeurAbsolue = -$difference;

    return "La valeur absolue de la différence est : " . $valeurAbsolue;




}
;


echo(valeurAbsolu(-2,1));



?>
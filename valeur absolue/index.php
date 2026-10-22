<?php

function valeurAbsolue(float $nb1, float $nb2): float  

{
    $difference = $nb1 - $nb2;

    if( $difference >= 0){

        return $difference;
    }

    return -1 * $difference;
}
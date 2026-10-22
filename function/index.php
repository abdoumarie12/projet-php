<?php

$nb1 = 20;

$nb2 = 30;

function comparaison(float $nb1, float $nb2): int 
{
   

    return ($nb1 > $nb2)? $nb1 : $nb2;

    } 
    echo "le plus grand est :" .comparaison($nb1, $nb2);
   
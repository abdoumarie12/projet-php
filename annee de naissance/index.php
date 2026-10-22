<?php

function anneeDeNaissance(int $dateDeNaissance): bool 

{
    return(date('Y') - $dateDeNaissance) < 10;


}   
    $a = 2020;


    echo anneeDeNaissance($a)? "Vrai" : "Faux";

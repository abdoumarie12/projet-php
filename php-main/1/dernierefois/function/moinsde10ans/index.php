<?php


function verifactionAge( int $annee,  int$anneeActuelle): bool 
{

    // $anneeActuelle = date('Y');

    $age = $anneeActuelle - $annee;



   if ($age < 10) {
        echo "les enfant ont moins de 10 ans.";
        return true ;
    }



    echo" les enfants ont plus de 10 ans ";

    return  false;




};


var_dump(verifactionAge(2090, date("Y")));



?>
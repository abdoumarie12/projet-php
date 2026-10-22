<?php

function  recette_est_valide(array $recette = []): bool 

{
    $recette_est_valide = false;

    if(array_key_exists('statut', $recette) && is_bool($recette['statut'])){

        $recette_est_valide = $recette['statut'];
    }

    return $recette_est_valide;
}
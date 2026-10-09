<?php

$couleur = 'Rouge';

$couleur = strtolower($couleur);

if($couleur=== 'Rouge'){
    echo " S'arretez";

}

elseif($couleur=== "vert"){
    echo "Passez";
}elseif($couleur === "orange"){
    echo "Ralentissez";
} else{
    echo "couleur inconue";
}

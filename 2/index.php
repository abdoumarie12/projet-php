<?php

$couleur = 'Rouge';

switch (strtolower($couleur)){
    case 'rouge';
    echo "S'arretez";
    break;

    case 'vert';
    echo "Passez";
    break;

    case 'orange';
    echo "Ralentissez";
    break;

    default;
    echo "Couleur non reconue";
    break;
}
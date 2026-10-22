<?php
$nom="";
$tentatives = 0;

$nom = readline("Veuillez entrer un nom : ");

while ($nom !== "ZZZZ") {
    $tentatives++;
    echo "Erreur, réessayez.\n";
    
    $nom = readline("Veuillez entrer un nom : ");
}

echo "OK, le nom est correct ($nom) après $tentatives tentative(s).\n";

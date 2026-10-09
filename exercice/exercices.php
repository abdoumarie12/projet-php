<?php

$nom =null;
$tantative = 1;


while($nom!== "ZZZZ"){
    
    $nom = readline("Veuillez entez un nom.");

    echo "$nom";

    $tentative = $tentative+1;

    if($nom!= "ZZZZ"){
        echo "Reponse incorrect";
    }
}
echo "Parfait vous avez  le trouver 'ZZZZ' au bout de  $tentative tentative";
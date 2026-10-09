<?php

$noms = ['Ninho', 'Niska', 'Daju', 'Chakira', 'Naps', 'Booba', 'Bonna Boy', 'weeskid', 
'Black Clover', 'One Piece', 'abdou',
];

$nomSuprimer = readline("Entrez le nom a supprimer");

$trouver = true;

$pos = -1;

while($trouver){
    $trouver = false;

    $position = -1;

    foreach ($noms as $cle => $nom){

        if(strtolower($nom) === strtolower($nomSuprimer)){

            $trouver = true;

            $position = $cle;
        }
    }

    if($position !== -1){

        for($i = $position; $i < count($noms) - 1; $i++){
            $noms[$i] = $noms[$i + 1];
        }

        $noms[array_pop($noms) - 1] = null;
    }
}

var_dump($noms);
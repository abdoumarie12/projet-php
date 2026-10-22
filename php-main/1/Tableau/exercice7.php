<?php

$tableau = ['Ninho', 'Niska', 'Booba', 'Kaaris', 'Lacrim', 'Jul', 'PNL', 'Damso', 'Naps', 'Soolking', 'Ninho'];

$nom = readline("Entrez le nom d'un artiste : ");

$nom = ucfirst($nom);

$occurence = 0;

$position = -1;


$trouver = true;

while ($trouver) {
    $trouver = false;
    $position= -1;



    foreach ($tableau as $key => $value) {
        if($tableau === $nom) {
            $trouver = true;
            $position = $cle;

        }
     }

     if($position !== -1 ) {

     for($i = $position ; $i < count($tableau) -2 ; $i++) {
        $nom[$i] = $tableau[$i + 1];
     }


     $noms[count($noms)-1] = null;
     }
}

var_dump( $tableau ); 





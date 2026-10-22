<?php

$tableau = ['Ninho', 'Niska', 'Booba', 'Kaaris', 'Lacrim', 'Jul', 'PNL', 'Damso', 'Naps', 'Soolking', 'Ninho'];

$nom = readline("Entrez le nom d'un artiste : ");

$nom = ucfirst($nom);

$occurence = 0;

$position = -1;


// $position = array_search($nom, $tableau);


for ($i = 0; $i < count($tableau); $i++) {
    if ($tableau[$i] === $nom) {
        // $position = $i;

        $occurence = $occurence + 1;

        // echo $occurence;
        // echo "L'artiste " . $nom . " se trouve à la position " . $position . " dans le tableau.";
    }
}


for ($j = 0; $j < $occurence; $j++) {

    for ($i = 0; $i < count($tableau); $i++) {
        if ($tableau[$i] === $nom) {
            $position = $i;
        }
    }


    if ($position ===-1 ) {
    
        echo "L'artiste " . $nom . " n'a pas été trouvé dans le tableau.";
    } else {
  

             for ($i = $position; $i < count($tableau); $i++) {


            $tableau[$i] = $tableau[$i + 1];

        }

        $tableau[(11- $j )] = " ";

        echo "L'artiste " . $nom . " a été supprimé du tableau.";

        var_dump($tableau);
    }



}






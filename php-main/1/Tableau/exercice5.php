<?php

$tableau = ['Ninho', 'Niska', 'Booba', 'Kaaris', 'Lacrim', 'Jul', 'PNL', 'Damso', 'Naps', 'Soolking', 'Ninho'];

$nom = readline("Entrez le nom d'un artiste : ");

$nom = ucfirst($nom);

// $position = array_search($nom, $tableau);


for( $i = 0; $i < count($tableau); $i++ ) {
    if ($tableau[$i] === $nom) {
        $position = $i;
        echo "L'artiste " . $nom . " se trouve à la position " . $position . " dans le tableau.";
    }
}



if ($position !== false) {
    for ($i = $position; $i < count($tableau); $i++) {

        $tableau[$i] = $tableau[$i + 1];

    }

    $tableau[10] = " ";

    echo "L'artiste " . $nom . " a été supprimé du tableau.";

    var_dump($tableau);
} else {
    echo "L'artiste " . $nom . " n'a pas été trouvé dans le tableau.";
}


<?php

$couleur = "vert";

if(ucfirst($couleur) == "Rouge") {
    echo "S'arretez.";
} else if (ucfirst($couleur) == "Orange") {
    echo "Ralentissez.";
} else if (ucfirst($couleur) == "Vert") {
    echo "Passez.";
} else {

    echo "Couleur non reconnue.";
}

?>
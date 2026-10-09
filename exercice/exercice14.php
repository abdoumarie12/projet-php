<?php

$nombre = (int) readline("veuillez entrez le nombre");

$somme = $nombre;


while($somme< 100){

    $nombre = (int) readline("veuillez entrez le nombre");
   
    $somme = $somme + $nombre ;

    if($somme >= 100){
        echo "stop; le nombre $est superieur ou egale a 100";
    }
}


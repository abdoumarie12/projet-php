<?php

$etudians = ["Ninho", "Niska", "Daju", "Chakira", "Naps", "Booba", "Bonna Boy", "weeskid", 
        "Black Clover", "One Piece",
];

$n = 10;

$position =readline("Veullez entrez le nom a suprimer");

$indice = -1;

    for($i = 0; $i < $n && $indice == -1; $i++){
        $etudians[$i] = $etudians[$i + 1];
        $indice = $i;
    }
   

    echo "$etudians";
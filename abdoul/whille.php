<?php
$etudiants = ["Ninho", "Niska", "Daju", "Chakira", "Naps", "Booba", "Bonna Boy", "weeskid", 
"Black Clover", "One Piece", "abdou",
];

$nom = readline("Entrez le nom a supprimer");

$pos = -1;

for($i =0; $i < 10; $i++){
    if (strtolawer ($etudiants[$i]) == ($nom)){
        $pos = $i;
    }
}

if($pos === -1){
    echo "nom non trouver";
}
else{
    for($i = $pos; $i < 9; $i++){

        $etudiants[$i] = $etudiants[$i +1];

    }

    $etudiants[10] = "";
}
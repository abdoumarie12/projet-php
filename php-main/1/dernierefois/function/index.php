<?php
$recettes = [
    [
        "titre" => "Recette 1",
        "recette" => "Description de la recette 1",
        "auteur" => "chirac@gmail.com",
        "status" => true
    ],
    [
        "titre" => "Recette 2",
        "recette" => "Description de la recette 2",
        "auteur" => "dona@gmail.com",
        "status" => false
    ],
    [
        "titre" => "Recette 3",
        "recette" => "Description de la recette 3",
        "auteur" => "toto@gmail.com",
        "status" => true
    ],
    [
        "titre" => "Recette 4",
        "recette" => "Description de la recette 4",
        "auteur" => "momo@gmail.com",
        "status" => false
    ],
    [
        "titre" => "Recette 5",
        "recette" => "Description de la recette 5",
        "auteur" => "momo@gmail.com",
        "status" => false
    ],
    [
        "titre" => "Recette 6",
        "recette" => "Description de la recette 6",
        "auteur" => "momo@gmail.com",
        "status" => true
    ],
    [
        "titre" => "Recette 7",
        "recette" => "Description de la recette 7",
        "auteur" => "momo@gmail.com",
        "status" => false
    ],
    [
        "titre" => "Recette 8",
        "recette" => "Description de la recette 8",
        "auteur" => "momo@gmail.com",
        "status" => true
    ],
    [
        "titre" => "Recette 9",
        "recette" => "Description de la recette 9",
        "auteur" => "momo@gmail.com",
        "status" => false
    ],
    [
        "titre" => "Recette 10",
        "recette" => "Description de la recette 10",
        "auteur" => "momo@gmail.com",
        "status" => false
    ]
];


function recette_est_valide(array $recette = []): bool
{

$recette = false;

if(array_key_exists('status', $recette) && is_bool($recette)) {
    $recette = $recette['status'];
    echo "La recette est valide";
}




return $recette;

}

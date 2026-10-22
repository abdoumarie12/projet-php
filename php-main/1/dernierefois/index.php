<?php

$recettes = [
    [
        "titre" => "Recette 1",
        "description" => "Description de la recette 1",
        "auteur" => "chirac@gmail.com",
        "is_active" => true
    ],
    [
        "titre" => "Recette 2",
        "description" => "Description de la recette 2",
        "auteur" => "dona@gmail.com",
        "is_active" => false
    ],
    [
        "titre" => "Recette 3",
        "description" => "Description de la recette 3",
        "auteur" => "toto@gmail.com",
        "is_active" => true
    ],
    [
        "titre" => "Recette 4",
        "description" => "Description de la recette 4",
        "auteur" => "momo@gmail.com",
        "is_active" => false
    ]
];

$users = [
    [
        "name" => "chirac",
        "email" => "chirac@gmail.com",
        "age" => 50,
    ],
    [
        "name" => "dona",
        "email" => "dona@gmail.com",
        "age" => 30,
    ],
    [
        "name" => "toto",
        // "email" => "toto@gmail.com",
        "age" => 40,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ]
];


function activeRecettes(array $recettes): array
{

$activeRecettes = [];

foreach ($recettes as $recette) {
    if( isset($recette['is_active']) && $recette['is_active'] === true) {
        $activeRecettes[] = $recette;
    }
}


return $activeRecettes;


}

function auteurName(array $users, string $email): string
{
    foreach ($users as $user) {
        if (isset($user['email']) && $user['email'] === $email) {
            return $user['name'];
        }
    }
    return  $email;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des recettes</title>
</head>

<body>
    <h1>Liste des recettes</h1>

    <?php foreach (activeRecettes($recettes) as $recette):
        {
           activeRecettes($recettes);
        } ?>
        <div class="recette">
            <h2><?php echo ($recette['titre']); ?></h2>
            <p><?php echo ($recette['description']); ?></p>
            <p><strong>Auteur :</strong> <?php echo (auteurName($users, $recette['auteur'])); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>

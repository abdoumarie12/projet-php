<?php
$recettes = [
    [
        "titre" => "Recette 1",
        "recette" => "Description de la recette 1",
        "auteur" => "chirac",
        "is_active" => true
    ],
    [
        "titre" => "Recette 2",
        "recette" => "Description de la recette 2",
        "auteur" => "dona",
        "is_active" => false
    ],
    [
        "titre" => "Recette 3",
        "recette" => "Description de la recette 3",
        "auteur" => "toto",
        "is_active" => true
    ],
    [
        "titre" => "Recette 4",
        "recette" => "Description de la recette 4",
        "auteur" => "momo",
        "is_active" => false
    ],
    [
        "titre" => "Recette 5",
        "recette" => "Description de la recette 5",
        "auteur" => "momo",
        "is_active" => false
    ],
    [
        "titre" => "Recette 6",
        "recette" => "Description de la recette 6",
        "auteur" => "momo",
        "is_active" => true
    ],
    [
        "titre" => "Recette 7",
        "recette" => "Description de la recette 7",
        "auteur" => "momo",
        "is_active" => false
    ],
    [
        "titre" => "Recette 8",
        "recette" => "Description de la recette 8",
        "auteur" => "momo",
        "is_active" => true
    ],
    [
        "titre" => "Recette 9",
        "recette" => "Description de la recette 9",
        "auteur" => "momo",
        "is_active" => false
    ],
    [
        "titre" => "Recette 10",
        "recette" => "Description de la recette 10",
        "auteur" => "momo",
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
        "email" => "toto@gmail.com",
        "age" => 40,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ],
    [
        "name" => "momo",
        "email" => "momo@gmail.com",
        "age" => 25,
    ]
];


function recette_est_active(array $recette = []): bool
{
    $recette_est_active = false;

    if (array_key_exists('is_active', $recette) && $recette['is_active'] === true && is_bool($recette['is_active'])) {
        $recette_est_active = $recette['is_active'];
    }


    return $recette_est_active;
}
;

function recette_est_valide(array $recettes = []): array
{
    $recette_est_valide = [];

    foreach ($recettes as $recette) {
        if (recette_est_active($recette)) {
            $recette_est_valide[] = $recette;
        }
    }
    ;

    return $recette_est_valide;
}
;

function auteur(array $users = [], string $nom_auteur = ""): string
{
    foreach ($users as $user) {
        // On cherche la correspondance entre le nom dans la recette et le nom de l'utilisateur
        if (array_key_exists('name', $user) && $user['name'] === $nom_auteur) {
            return $user['name']; // On retourne son e-mail
        }
    }

    return "Email inconnu"; // Valeur par défaut si non trouvé
}



// function auteur(array $users = [], string $auteur_email = ""): string
// {
//     $nom_complet = "";


//     foreach ($users as $user) {
//         if (array_key_exists('email', $user) && $user['email'] === $auteur_email) {
//             $nom_complet = $user['name'];

//         }
//     }

//     return $nom_complet;

// }



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

    <hr>
    <div class="recettes">
        <!-- recette_est_valide($recettes) as $recette -->
        <?php foreach ($recettes as $recette): ?>

            <?php if (recette_est_active($recette)) { ?>
                <div class="recette">
                    <h2><?php echo ($recette['titre']); ?></h2>
                    <p><?php echo ($recette['recette']); ?></p>
                    <p><strong>Auteur :</strong> <?php echo (auteur($users, $recette['auteur'])); ?></p>

                    <hr>
                </div>
            <?php } ?>
        <?php endforeach; ?>

    </div>
</body>

</html>
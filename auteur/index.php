<?php

$auteurs = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

            $recettes = [
                [
                    'title' => 'Cassoulet',
                    'recipe' => 'Etape 1 : des flageolets !',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => true,
                ],

                [
                    'title' => 'Couscous',
                    'recipe' => 'Etape 1 : des flageolets !',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => true,
                ],

                [
                    'title' => 'Escalope milanaise',
                    'recipe' => 'Etape 1 : des flageolets !',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => true,
                ],
            ];

            function displayAuthor(string $authorEmail, array $auteurs): string
            {
                foreach ($auteurs as $auteur) {
                    if ($authorEmail === $auteur['email']) {
                        return $auteur['full_name'] . ' (' . $auteur['age'] . ' ans)';
                    }
                }
            
                return 'Auteur inconnu';
            }
        function isValidRecipe(array $recette): bool
        {
            if (array_key_exists('is_enabled', $recette) && is_bool($recette['is_enabled'])) {
                $isEnabled = $recette['is_enabled'];
            } else {
                $isEnabled = false;
            }
        
            return $isEnabled;
        }
    function getRecipes(array $recettes): array

    {

        $valid_recipes = [];

        foreach ($recettes as $recette){

            if (isValidRecipe($recette)){
                $valid_recipes[] = $recette;
            }
        }

        return $valid_recipes;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des recettes</title>
</head>
<body>
    
    <?php foreach (getRecipes($recettes) as $recette) : ?>

        <article>

            <h3>
                <?php echo $recette['title']; ?>
            </h3>

            <div>

                <?php echo $recette['recipe']; ?>
            </div>

            <i>
                <?php echo displayAuthor($recette['author'], $auteurs); ?>
            </i>
        </article>

    <?php endforeach; ?>
</body>
</html>
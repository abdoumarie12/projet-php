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
                    'est_actif' => true,
                ],

                [
                    'title' => 'Couscous',
                    'recipe' => 'Etape 1 : des flageolets !',
                    'author' => 'mickael.andrieu@exemple.com',
                    'est_actif' => true,
                ],

                [
                    'title' => 'Escalope milanaise',
                    'recipe' => 'Etape 1 : des flageolets !',
                    'author' => 'mickael.andrieu@exemple.com',
                    'est_actif' => true,
                ],
            ];

            function recetteAuthor(string $authorEmail, array $auteurs): string
            {
                foreach ($auteurs as $auteur) {
                    if ($authorEmail === $auteur['email']) {
                        return $auteur['full_name'] . ' (' . $auteur['age'] . ' ans)';
                    }
                }
            
                return 'Auteur inconnu';
            }

function recetteValide(array $recette=[]): bool 

{
    $estactif = false;
    if(array_key_exists('est_actif', $recette) && is_bool($recette['est_actif'])
    ){

        $estactif = $recette['est_actif'];
        
    }

    return $estactif;
}

function recettesValide(array $recettes=[]): array 
{

    $recettesValides =[];
    foreach($recettes as $recette){

        if(recetteValide($recette)){

            $recettesValides[] = $recette;
        }
    }
    return $recettesValides;
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
    
<?php foreach   ( recettesValide ($recettes) as $recette) : ?>
<hr>
<article>

    <h3>
        <?php echo $recette['title']; ?>
    </h3>

    <div>

        <?php echo $recette['recipe']; ?>
    </div>

    <i>
        <?php echo $recette['author'], $auteurs; ?>
    </i>
</article>
<hr>
<?php endforeach; ?>
        
</body>
</html>

    <h1>
        Affichage des recepttes
    </h1>    
    
    

        <h3>
            Cassoulet
        </h3>

        <?php
            $recipes = [
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
                    'is_enabled' => false,
                ],

                [
                    'title' => 'Escalope milanaise',
                    'recipe' => 'Etape 1 : des flageolets !',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => true,
                ],
            ]
        ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            Affichages des recepttes
        </h1>

        <?php

        foreach($recipes as $recipe){
            if(array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true){

                echo $recipe['title'];
                echo $recipe['recipe'];
                echo $recipe['author'];

            
            }
        }
        ?>
    </body>
    </html>


    
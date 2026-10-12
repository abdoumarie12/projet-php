
   

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

       

       <?php foreach($recipes as $recipe) : ?>
            <?php  if($recipes['est_actif'] ?? false === true) : ?>

                <article>

                    <h2>
                        <?php 
                            echo $recipe['title'];
                        ?>
                    </h2>

                    <p>
                        <?php 
                            echo $recipe['recipe'];
                        ?>
                    </p>

                    <i>
                        <?php 
                            echo $recipe['author'];


                        ?>
                     </i>


                </article>
            <?php endif; ?>

        <?php endforeach; ?>
            
               
                
                
        
    </body>
    </html>


    
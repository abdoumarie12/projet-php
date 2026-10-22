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

        function displayAuthor( string $authorEmail,   array $auteurs): string
            
        {
            foreach($auteurs as $auteur) {
                if($authorEmail === $auteur['email']){

                return $auteur['full_name'] . '(' . $auteur['age'] . 'ans)';
                }
            }
        }
        
        function  isValidRecipe(array $recette): bool

        {
            if(array_key_exists('is_enabled', $recette)){

                $isEnebled = $recette['is_enabled'];
            }
            else{

                $isEnebled = false;
            }

            return $isEnebled;
        }

        function getRecipes(array $recette): array

       {

        $valid_recipes = [];

        foreach ($recettes as $recette){

            if(isValidRecipe($recette)){

                $valid_recipes[] = $recette;
            }

            return $valid_recipes;
        }
       }
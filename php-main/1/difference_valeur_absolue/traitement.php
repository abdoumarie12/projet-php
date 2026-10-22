<?php

var_dump($_POST);

$a_soumit_le_formulaire = (isset($_POST["soumettre"]) && $_POST["soumettre"] === 'Envoyer');

$champs_valides = (isset($_POST['number1']) && trim($_POST['number1']) !== '' && isset($_POST['number2']) && trim($_POST['number2']) !== '');






?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valeur absolue de la difference - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="d-flex flex-column min-vh-100">
    <?php require_once(__DIR__ . '/header.php'); ?>
    <div class="container">
        <?php if (!$a_soumit_le_formulaire) { ?>
            <div class="alert alert-danger" role="alert">
                <p>
                    Vous n'avez pas soumit le formulaire.
                    <a href="index.php" class="btn btn-secondary">Retourner au formulaire</a>
                </p>
            </div>
        <?php } elseif ($a_soumit_le_formulaire && !$champs_valides) { ?>
            <div class="alert alert-danger" role="alert">
                <p>
                    Vous n'avez pas remplire les champs.
                    <a href="index.php" class="btn btn-secondary">Retourner au formulaire</a>
                </p>
            </div>

        <?php } elseif ($a_soumit_le_formulaire && $champs_valides) {

            $saisie1 = isset($_POST['number1']) ? str_replace(',', '.', $_POST['number1']) : '0';
            $saisie2 = isset($_POST['number2']) ? str_replace(',', '.', $_POST['number2']) : '0';


            $nombre1 =  (float)$saisie1;
            $nombre2 = (float)$saisie2;
            

            $difference = $nombre1 - $nombre2;

            $valeurAbsolue = null;



            // première syntaxe
        


            if ($difference >= 0) {

                $valeurAbsolue = $difference;
            }


            if ($difference < 0) {
                $valeurAbsolue = -$difference;
            }


            ?>

            <section class="card" style="max-width: 320px">
                <h1>Traitement bien effectué !</h1>
                <img src="img/green-double-circle-check-mark_78370-1749.avif" class="card-img-top" alt="...">
                <div class="card-body ">
                    <!-- <h4 class="card-title border-bottom pb-2">Rappel de vos informations</h4> -->
                    <strong>
                        <p class="card-text py-3">
                            <?php echo "la valeur absolue de la différence est : " . $valeurAbsolue; ?>
                        </p>
                    </strong>

                    <a href="index.php" class="btn btn-secondary text-align-center flex">Retourner au formulaire</a>
                </div>
            </section>

        <?php } ?>
    </div>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>


</html>
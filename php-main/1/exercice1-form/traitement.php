<?php

var_dump($_GET);

$a_soumit_le_formulaire = (isset($_GET["soumettre"]) && $_GET["soumettre"] === 'Envoyer');

$champs_valides = isset($_GET['number']) && !empty(trim($_GET['number']));

$anneeActuelle = date('Y'); 


?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGE - Page d'accueil</title>
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
        <?php }elseif($a_soumit_le_formulaire && !$champs_valides){ ?>
            <div class="alert alert-danger" role="alert">
                <p>
                    Vous n'avez pas remplire les champs. 
                    <a href="index.php" class="btn btn-secondary">Retourner au formulaire</a>
                </p>
            </div>
        <?php }elseif($a_soumit_le_formulaire && $champs_valides && $_GET['number'] > $anneeActuelle){ ?>
            <div class="alert alert-danger" role="alert">
                <p>
                    Vous etes nee dans le future
                    <a href="index.php" class="btn btn-secondary">Retourner au formulaire</a>
                </p>
            </div>
        <?php }elseif($a_soumit_le_formulaire && $champs_valides){

            $annee = $_GET['number'];

            $age = $anneeActuelle - $annee;

        ?>

            <h1>Message bien reçu ! </h1>
            <section class="card" style="max-width: 320px">
                <img src="img/green-double-circle-check-mark_78370-1749.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title border-bottom pb-2">Rappel de vos informations</h4>
                    <p class="card-text"><strong>Vous avez :</strong> <?php echo $age; ?> ans</p>
                </div>
            </section>

        <?php } ?>
    </div>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>


</html>
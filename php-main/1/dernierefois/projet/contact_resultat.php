<?php

// var_dump($_POST);
var_dump($_FILES);

$a_soumit_le_formulaire = (isset($_POST["soumettre"]) && $_POST["soumettre"] === 'Envoyer');


$champs_valides = false;
$name ='';
$email = '';
$message = '';


if ($a_soumit_le_formulaire) {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) &&
        !empty(trim($_POST['name'])) && !empty(trim($_POST['email'])) && !empty(trim($_POST['message']))) {
        
        
        $champs_valides = true;
        
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
    }
}
?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="d-flex flex-column min-vh-100">
    <?php require_once(__DIR__ . '/header.php'); ?>
    <div class="container">




        <?php if ($a_soumit_le_formulaire && $champs_valides) { ?>

            <h1>Message bien reçu ! </h1>
            <section class="card" style="max-width: 320px">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title border-bottom pb-2">Rappel de vos informations</h4>
                    <p class="card-text"><strong>Nom :</strong> <?php echo $name; ?></p>
                    <p class="card-text"><strong>Adresse email :</strong> <?php echo $email; ?></p>
                    <p class="card-text"><strong>Message :</strong><br><?php echo nl2br($message); ?></p>
                </div>
            </section>

        <?php } elseif ($a_soumit_le_formulaire && !$champs_valides)  { ?>

            <div class="alert alert-danger" role="alert">
                Il faut un nom, un email et un message valides pour soumettre le formulaire.
            </div>
            <p><a href="contact.php" class="btn btn-secondary">Retourner au formulaire</a></p>
        <?php } else { ?>
             <div class="alert alert-danger" role="alert">
                 Désolé vous n'avez pas soumis le formulaire. Veillez cliquer sur ce lien pour soumettre à nouveau    
             </div> 

               <p><a href="contact.php" class="btn btn-secondary">Retourner au formulaire</a></p>

        <?php } ?>



        <br />
    </div>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>


</html>
<?php

$message = "";

$nom = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));

$fichier_envoye = false;
$nom_fichier = "";
$extension = "";

// Cas 1 : le fichier est tellement gros que PHP vide $_POST et $_FILES
if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST) && empty($_FILES) && ($_SERVER['CONTENT_LENGTH'] ?? 0) > 0) {

    $message = $message . "<li>Le fichier est trop volumineux.</li>";

} else {

    if (isset($_FILES['capture'])) {

        $erreur = $_FILES['capture']['error'];

        // Cas 2 : fichier refusé par PHP car trop gros (limite php.ini ou formulaire)
        if ($erreur == 1 || $erreur == 2) {

            $message = $message . "<li>Le fichier est trop volumineux.</li>";

        // Cas 3 : aucun fichier choisi
        } elseif ($erreur == 4) {

            $message = $message . "<li>Aucun fichier n'a été envoyé.</li>";

        // Cas 4 : autre erreur
        } elseif ($erreur != 0) {

            $message = $message . "<li>Une erreur est survenue pendant l'envoi.</li>";

        // Cas 5 : le fichier est bien arrivé
        } else {

            // Ta propre limite (2 Mo)
            if ($_FILES['capture']['size'] <= 2000000) {

                if (!empty($_FILES['capture']['name'])) {

                    $information_capture = pathinfo($_FILES['capture']['name']);

                    $extension = strtolower($information_capture['extension'] ?? '');

                    $extension_autiriser = ['jpg', 'jpeg', 'png', 'gif'];

                    if (in_array($extension, $extension_autiriser)) {

                        $telechargement = __DIR__ . '/telechargement/';

                        if (!is_dir($telechargement)) {

                            mkdir($telechargement);
                        }

                        $nom_fichier = basename($_FILES['capture']['name']);

                        move_uploaded_file($_FILES['capture']['tmp_name'], $telechargement . $nom_fichier);

                        $fichier_envoye = true;

                        $message = $message . "<li>Le fichier a bien été envoyé.</li>";

                    } else {

                        $message = $message . "<li>L'extension n'est pas autorisée.</li>";
                    }

                } else {

                    $message = $message . "<li>Le nom du fichier est manquant.</li>";
                }

            } else {

                $message = $message . "<li>Le fichier est trop volumineux.</li>";
            }
        }

    } else {

        $message = $message . "<li>Aucun fichier n'a été envoyé ou une erreur est survenue.</li>";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi de fichier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php require_once(__DIR__ . '/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Résultat de l'envoi</h1>

                <?php
                echo "<ul>" . $message . "</ul>";
                ?>

                <?php if ($fichier_envoye) { ?>

                <section class="card" style="max-width: 360px">
                    <img src="telechargement/<?php echo htmlspecialchars($nom_fichier); ?>" class="card-img-top" alt="Image envoyée">
                    <div class="card-body">
                        <h4 class="card-title border-bottom pb-2">Informations</h4>
                        <p class="card-text"><strong>Nom :</strong> <?php echo $nom; ?></p>
                        <p class="card-text"><strong>Email :</strong> <?php echo $email; ?></p>
                        <p class="card-text"><strong>Fichier :</strong> <?php echo htmlspecialchars($nom_fichier); ?></p>
                        <p class="card-text"><strong>Extension :</strong> <?php echo htmlspecialchars($extension); ?></p>
                    </div>
                </section>

                <?php } ?>

                <p class="mt-3"><a href="contact.php" class="btn btn-secondary">Retourner au formulaire</a></p>

            </div>
        </div>
    </div>

    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>

</html>
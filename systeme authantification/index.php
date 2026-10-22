<?php

$erreurs = json_decode($_GET['erreurs'] ?? '[]', true) ?? [];
$donnees = json_decode($_GET['donnees'] ?? '[]', true) ?? [];

// Fonction pour afficher du texte en toute sécurité (protège contre la faille XSS)
function e($texte)
{
    return htmlspecialchars($texte ?? '', ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <main>
            <h1>Page de connexion</h1>

            <?php if (!empty($_GET['message_succes'])) { ?>
                <div class="alert alert-success">
                    <?= e($_GET['message_succes']) ?>
                </div>
            <?php } ?>

            <?php if (!empty($_GET['message_erreur'])) { ?>
                <div class="alert alert-danger">
                    <?= e($_GET['message_erreur']) ?>
                </div>
            <?php } ?>

            <form action="traitement.php" method="POST" novalidate>
                <div class="mb-3">
                    <label for="adresse-email" class="form-label">
                        Adresse email <span class="text-danger">(*)</span> :
                    </label>

                    <input type="email" class="form-control" id="adresse-email" name="adresse_email"
                        placeholder="Veuillez entrer votre adresse email"
                        value="<?= e($donnees['adresse_email'] ?? '') ?>">

                    <?php if (!empty($erreurs['adresse_email'])) { ?>
                        <p class="text-danger"><?= e($erreurs['adresse_email']) ?></p>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <label for="mot-de-passe" class="form-label">
                        Mot de passe <span class="text-danger">(*)</span> :
                    </label>

                    <input type="password" class="form-control" id="mot-de-passe" name="mot_de_passe"
                        placeholder="Veuillez entrer votre mot de passe">

                    <?php if (!empty($erreurs['mot_de_passe'])) { ?>
                        <p class="text-danger"><?= e($erreurs['mot_de_passe']) ?></p>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <input type="reset" value="Annuler" class="btn btn-danger">
                    <input type="submit" name="soumettre" value="Envoyer" class="btn btn-primary">
                </div>
            </form>
        </main>

    </div>
</body>

</html>
<?php
$erreur = "";
$resultat = "";
$nombre1 = "";
$nombre2 = "";

$nombre1Vide = !isset($_POST['nombre1']) || (empty($_POST['nombre1']) && $_POST['nombre1'] !== '0');
$nombre2Vide = !isset($_POST['nombre2']) || (empty($_POST['nombre2']) && $_POST['nombre2'] !== '0');

if ($nombre1Vide && $nombre2Vide) {
    $erreur = "Veuillez remplir les deux champs : « Nombre 1 » et « Nombre 2 ».";
} elseif ($nombre1Vide) {
    $erreur = "Veuillez remplir le champ manquant : « Nombre 1 ».";
} elseif ($nombre2Vide) {
    $erreur = "Veuillez remplir le champ manquant : « Nombre 2 ».";
} else {
    $nombre1 = $_POST['nombre1'] + 0;
    $nombre2 = $_POST['nombre2'] + 0;

    if ((is_int($nombre1) || is_float($nombre1)) && (is_int($nombre2) || is_float($nombre2))) {
        $resultat = abs($nombre1 - $nombre2);
    } else {
        $erreur = "Veuillez saisir des nombres valides.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
</head>
<body>
    <?php if (!empty($erreur)) { ?>
        <p><?php echo $erreur; ?></p>
    <?php } else { ?>
        <p>
            La valeur absolue de la différence entre <strong><?php echo $nombre1; ?></strong>
            et <strong><?php echo $nombre2; ?></strong> est : <strong><?php echo $resultat; ?></strong>
        </p>
    <?php } ?>

    <button>
        <a href="index.php">Retour au formulaire</a>
    </button>
</body>
</html>
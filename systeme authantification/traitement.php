<?php

// Si on ouvre ce fichier directement (sans soumettre le formulaire), on retourne au formulaire
// En haut du fichier
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$donnees = $_POST;
$erreurs = [];
$message_erreur = '';
$message_succes = '';

// Validation de l'adresse email
$email = trim($donnees['adresse_email'] ?? '');

if ($email === '') {
    $erreurs['adresse_email'] = 'Le champ adresse email est obligatoire.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs['adresse_email'] = "Le champ adresse email contient une valeur qui n'est pas une adresse email.";
}

// Validation du mot de passe
$mot_de_passe = trim($donnees['mot_de_passe'] ?? '');

if ($mot_de_passe === '') {
    $erreurs['mot_de_passe'] = 'Le champ mot de passe est obligatoire.';
} elseif (strlen($mot_de_passe) < 8) {
    $erreurs['mot_de_passe'] = 'Le champ mot de passe doit contenir au minimum huit caractères.';
}

// Messages
if (!empty($erreurs)) {
    $message_erreur = "Oups ! Un ou plusieurs champs sont incorrects. Merci de consulter le formulaire pour les corriger avant de le soumettre à nouveau.";
} else {
    $message_succes = 'Connexion réussie.';
}

// On ne renvoie JAMAIS le mot de passe dans l'URL
unset($donnees['mot_de_passe']);

// En bas du fichier
header('Location: index.php'
    . '?donnees=' . urlencode(json_encode($donnees))
    . '&erreurs=' . urlencode(json_encode($erreurs))
    . '&message_erreur=' . urlencode($message_erreur)
    . '&message_succes=' . urlencode($message_succes));
exit;
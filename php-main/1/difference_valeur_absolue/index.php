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


        <h1>Valeuer absolue de la differencce</h1>



        <form action="traitement.php" method="POST" novalidate>
            <div class="mb-3">
                <label for="number" class="form-label">Nombre 1 : </label>
                <input type="number" step="any" class="form-control" id="number2" name="number1" aria-describedby="number-help" required>
                <div id="number-help" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Nombre 2 : </label>
                <input type="number"  step="any"  class="form-control" id="number2" name="number2" aria-describedby="number-help" required>
                <div id="number-help" class="form-text"></div>
            </div>
            <!-- <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div> -->
            <!-- <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message" required>
                </textarea>
            </div> -->
            <button type="reset"  class="btn btn-danger">Annuler</button>
            <button type="submit" name="soumettre" value="Envoyer" class="btn btn-primary">Calculer</button>
        </form>



        <br />
    </div>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>


</html>
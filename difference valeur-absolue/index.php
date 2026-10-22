<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Valeur absolue</title>

    <!-- integration boostrap -->
    <link rel="stylesheet" href="public/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <form action="traitement.php" method="POST">
        <div class="container">
            <h1>
                Valeur absolue de la différence de deux nombre
            </h1>

            <div class="mb-3">
                <label for="nombre1" class="label-form"> Entrer la valeur du nombre 1</label>
                <input type="number" class="form-control" id="nombre1" name="nombre1">
            </div>


            <div class="mb-3">
                <label for="nombre2" class="label-form"> Entrer la valeur du nombre 2</label>
                <input type="number" class="form-control" id="nombre2" name="nombre2">
            </div>

            <div class="row">

            <div class="col">
                <input type="reset" name="soumettre" value="Annuler" class="btn btn-secondary">
            </div>

            <div class="col">
                <input type="submit" name="soumettre" value="Calculer" class="btn btn-secondary">
            </div>

            </div>
        </div>



    </form>









    <!--  Popper Js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- Bootstrap min css - JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>

</html>
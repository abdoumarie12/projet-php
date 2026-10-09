<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
        Premiere syntaxe
    </h1>

    <?php
$annes1 = 2000;
$annesAtuelle = 2026;
$ages = $annes1 - $annesAtuelle;
if($ages>10){
    echo "$ages tu est grand et tu as plus de 10ans";
}

else{
    echo "$ages l'enfant a moin de 10 ans";
}
?>
</body>
</html>
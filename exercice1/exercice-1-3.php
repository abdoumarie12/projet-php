<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>
    Troixieme syntaxe
</h1>

<?php
$d = 12;
$e = 10;

if($d>$e){
    echo "$d est le plus grang";
}

elseif($e>$d){
    echo "$e est le plus grand";
}

elseif($d == $e){
    echo "$d est egale $e";
}

else{
    echo "erreur";
}
?>
</body>
</html>
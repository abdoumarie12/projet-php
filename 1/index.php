<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma premiere page en php</title>
</head>
<body>
<h1>
    premiere syntaxe
</h1>

<?php
$a = 19;
$b = 8;

if($a>$b){
    echo "$a est le plus grand";
}

if($a>$b){
    echo "$b est le plus grand";
}
if($a == $b){
    echo "aucun grand";
}

?>

<h1>
    Deuxiemme syntaxe
</h1>

<?php
$b = 6;
$c = 9;
if($b>$c){
    echo "$b est le plus grand";
}
else{
    echo "$c est le plus grand";
}

?>

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
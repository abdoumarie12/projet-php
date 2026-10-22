<?php
$nombre = 5;
$fact = 1;
$i = 1;


while ($i <= $nombre) {
    $fact = $fact * $i; 
    $i = $i + 1;
}

echo "Le factoriel de " . $nombre . " est : " . $fact;
?>
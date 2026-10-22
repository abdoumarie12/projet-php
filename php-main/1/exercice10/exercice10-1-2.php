<?php
$somme = null;
$i = null;

$i = 0;
$somme = 0;

while ($i <= 10) {
    $somme = $somme + $i;
    $i++;
}

echo "La somme est : " . $somme;
<?php

$a = 5;
$b = 9;
$c = 80;
$d = null;
$choix = null;

echo "1 - Somme\n";
echo "2 - Produit\n";
echo "3 - Moyenne\n";
echo "4 - Minimum\n";
echo "5 - Maximum\n";

switch ($choix) {
    case 1 : echo "le  resultats de la somme est $d";
    ($d = $a + $b + $c);
    break

    
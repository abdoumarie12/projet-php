<?php

$moyenne = [10.5, 15, 0.3, 0.2, 8, 12, 13, 14, 15, 13];
$i = 0;

// Pour le minimum


$min = $moyenne[0];
// Prémière boucle while
while ($i < count($moyenne)) {
    if ($moyenne[$i] < $min) {
        $min = $moyenne[$i];
    }
    $i = $i + 1;
}
echo "Le minimum est " . $min . "";

echo "<br><br>";

// Deuxième boucle for

$min = $moyenne[0];
for ($i = 0; $i < count($moyenne); $i++) {
    if ($moyenne[$i] < $min) {
        $min = $moyenne[$i];
    }
}

echo "Le minimum est " . $min . "";

echo "<br><br>";


// Troisième boucle foreach
$min = $moyenne[0];
foreach ($moyenne as $note) {
    if ($note < $min) {
        $min = $note;
    }
}

echo "Le minimum est " . $min . "";

echo "<br><br>";


// Pour le maximum

$moyenne = [10.5, 15, 0.3, 0.2, 8, 12, 13, 14, 15, 13];
$i = 0;
$max = $moyenne[$i];
// Prémière boucle while
while ($i < count($moyenne)) {
    if ($moyenne[$i] > $max) {
        $max = $moyenne[$i];
    }
    $i = $i + 1;
}
echo "Le maximum est " . $max . "";

echo "<br><br>";

// Deuxième boucle for

$max = $moyenne[0];
for ($i = 0; $i < count($moyenne); $i++) {
    if ($moyenne[$i] > $max) {
        $max = $moyenne[$i];
    }
}

echo "Le maximum est " . $max . "";

echo "<br><br>";


// Troisième boucle foreach
$max = $moyenne[0];
foreach ($moyenne as $note) {
    if ($note > $max) {
        $max = $note;
    }
}

echo "Le maximum est " . $max . "";



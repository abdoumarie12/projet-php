<?php

$moyenne = [10.5, 15, 0.3, 0.2, 8, 12, 13, 14, 15, 13];
$i = 0;


// Prémière boucle while
$somme = 0;
while ($i < count($moyenne)) {
    $somme = $somme + $moyenne[$i];
    $i = $i + 1;
}
echo "La somme  est " . $somme . "";



echo "<br><br>";

// Deuxième boucle for
$somme = 0;
for ($i = 0; $i < count($moyenne); $i++) {
    $somme = $somme + $moyenne[$i];

    // echo "La note" . ($i + 1) . " est " . $moyenne[$i] . "";

}
echo "La somme  est " . $somme . "";

echo "<br><br>";


// Troisième boucle foreach
$somme = 0;
foreach ($moyenne as $note) {
    $somme = $somme + $note;
    // $i = $i + 1;
}

echo "La somme  est " . $somme . "";





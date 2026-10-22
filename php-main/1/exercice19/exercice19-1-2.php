<?php
$a = 2; 
$b = 4;

$num1 = $a;
$num2 = $b;

// for (; $b != 0; ) {
for ($i=1 ; $b != 0; $i++)  {
    $reste = $a % $b;
    $a = $b;
    $b = $reste;
}

echo "Le PGCD de " . $num1 . " et " . $num2 . " est : " . $a;
?>

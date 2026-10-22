<?php
$a = 2; 
$b = 4; 

$num1 = $a;
$num2 = $b;

while ($b != 0) {
    $reste = $a % $b;
    $a = $b;           
    $b = $reste;  
}

echo "Le PGCD de " . $num1 . " et " . $num2 . " est : " . $a;
?>

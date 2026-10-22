<?php
$nombre = -5; 
$fact = 1;

for ($i = 1; $i <= $nombre; $i++) {
    $fact = $fact * $i;
}

echo "Le factoriel de " . $nombre . " est : " . $fact;

?>
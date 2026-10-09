<?php

$moy = [10.5, 15, 0.3, 0.2, 8, 12, 13, 14, 15, 13];


var_dump($moy);

for($i = 0; $i<10; $i++){
    echo "la note" .($i+1). "est" .$moy[$i];
}
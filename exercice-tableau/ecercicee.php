<?php

$moy = [10.5, 15, 0.3, 0.2, 8, 12, 13, 14, 15, 13];


var_dump($moy);

$max = $moy[0];

foreach($moy as $note){
    if($note > $max){
        $max = $note;

    }
}
echo "le plus grand est" .$max;
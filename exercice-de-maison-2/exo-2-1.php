<?php

$nb1 = 120;
$nb2 = 100;
$nb3 = 29;

$max = $nb1;

if($nb2>$max){
    $max = $nb2;
}
if($nb3>$max){
    $max = $nb3;
}
echo "le plus grand est $max";
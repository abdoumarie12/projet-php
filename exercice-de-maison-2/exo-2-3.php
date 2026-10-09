<?php

$nb1 = 100;
$nb2 = 10;
$nb3 = 29;

if($nb1>= $nb2 && $nb1>= $nb3){
    echo "Le plus est $nb1";

}
elseif($nb2>= $nb1 && $nb2>= $nb3){
    echo "le plus grand est $nb2";
}
else{
    echo "le plus est $nb3";
}
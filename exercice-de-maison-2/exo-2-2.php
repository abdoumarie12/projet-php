<?php

$nb1 = 120;
$nb2 = 1000;
$nb3 = 29;



if($nb1>= $nb2){
   if($nb1>= $nb3){
    echo "le plus grand est $nb1";
   }
   else{
    echo "le plus grand est $nb3";
}
}
elseif($nb2>= $nb3){
    echo "le plus est grant est $nb2";
}
else{
    echo "le plus grand est $nb3";
}
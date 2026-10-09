<?php

$a = 2;
$b = 12;
$x = null;

if ($a != 0){
    $x = -$b / $a;
    echo "La solution est x = $x";
}

elseif($b == 0){
    echo "Tout réel est solution";
}
else{
    echo "Pas de solution";
}
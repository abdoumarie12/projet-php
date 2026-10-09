<?php

$tab1 = [2, 0, 10, 20, 35,];

$tab2 = [5, -5, 8, -10, -15];

$tab3 = [];

while($i < 5 ){

    $tab3[$i] = $valeur + $tab2[$i];

    $i++;
}

foreach($tab3 as $i => $valeur){

    echo "Tab3[" .($i + 1). "] =" . $valeur . "\n";
}
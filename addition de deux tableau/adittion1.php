<?php

$tab1 = [2, 0, 10, 20, 35,];

$tab2 = [5, -5, 8, -10, -15];

$tab3 = [];

for($i = 0; $i < 5; $i++){
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
foreach($tab3 as $i => $valeur){

    echo "Tab3[" .($i + 1). "] =" . $valeur . "\n";
}
<?php

$notes = [15, 20, 12, 8, 7, 14, 11, 16, 5, 0];

for($i = 0; $i < count($notes)-1; $i++){

    for($j = $i + 1; $j < count($notes); $j++){

        if($notes[$i] > $notes[$i]){

            $permute = $notes[$i];

            $notes[$i] = $notes[$j];

            $notes[$j] = $permute;
        }
    }
}
echo "<pre>";
var_dump($notes); 
echo "</pre>";
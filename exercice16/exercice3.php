<?php
$nb1 = null;
$i = 0;

for( $i = 0; $i<11; $i++){
    $table = $i + 1;

    for($ii = 0; $ii<11; $ii++){
        echo ."$i * $ii = " .($i * $ii). "<br>"; 
    }
}
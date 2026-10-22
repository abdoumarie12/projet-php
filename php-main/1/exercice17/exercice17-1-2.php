<?php
$table = 1;

for ($table = 1; $table <= 10; $table++) {
    echo "<h3>Table de multiplication de " . $table . "</h3>";
    
    $i = 1; 
    
    
    for ($i = 1; $i <= 10; $i++) {
        echo $table . " x " . $i . " = " . ($table * $i) . "<br>";
    }
    
    echo "<br>"; 
}
?>

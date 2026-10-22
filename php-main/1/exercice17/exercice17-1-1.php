<?php
$table = 1;

while ($table <= 10) {
    echo "<h3>Table de multiplication de " . $table . "</h3>";
    
    $i = 1;
    
    while ($i <= 10) {
        echo $table . " x " . $i . " = " . ($table * $i) . "<br>";
        $i = $i + 1; 
    }
    
    echo "<br>"; 
    $table = $table + 1; 
}
?>

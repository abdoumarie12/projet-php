<?php

$moyenne = [10.5, 15, 0.3, 0.2, 8, 12, 13, 14, 15, 13];

// $moyenne = array(10.5, 15, 0.3, 0.2, )8, 12, 13, 14, 15, 13
// );

$i = 0;

var_dump($moyenne); 

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

 
print_r($moyenne);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

while($i <count($moyenne)) {
    echo "La note". ($i + 1) ." est ". $moyenne[$i] ."";
    $i++;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


for($i = 0; $i < count($moyenne) ; $i++) {

echo "La note". ($i + 1) ." est ". $moyenne[$i] ."";

}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

foreach ($moyenne as $pos => $note) {

echo "La note". ($i + 1) ." est ". $note ."";

}



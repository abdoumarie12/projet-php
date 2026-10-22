<?php


function plusGrand(int|float $a, int|float $b): string
{

    if ($a > $b) {
        return "$a est le plus grand";
    }


    if ($b > $a) {
        return "$b est le plus grand";
    }


    if ($a == $b) {
        return "Aucun n'est le plus grand, ils sont égaux";
    }

    return 'Les deux nombres sont invalides';


}
;
function maximun(int $a, int $b): string
{

    if ($b > $a) {
        return "$b est le plus grand";
    } else {
        return "$a est le plus grand";
    }

    // return  'Les deux nombres sont invalides';


}
;
function lePlusGrand(int $a, int $b): string
{

    if ($b > $a) {
        return "$b est le plus grand";
    } else if ($a > $b) {
        return "$a est le plus grand";
    } else {
        return "Aucun n'est le plus grand, ils sont égaux";
    }

    // return  'Les deux nombres sont invalides';


}
;



echo '<br/><br/>';



print_r(maximun(9, 10));



echo '<br/><br/>';


print_r(plusGrand(8, 145));


echo '<br/><br/>';

print_r(lePlusGrand(8,0));


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p><?php echo plusGrand(5, 8) ?></p>
    
</body>
</html> -->
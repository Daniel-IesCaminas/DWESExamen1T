<?php

$arrayCualquiera = [4, 7, 4.5, "hola"];

function isPar($array) {
    $aPar = [];
    foreach ($array as &$n) {
        is_int($n) && (($n % 2) == 0)
         ? $aPar [] = true
         : $aPar [] = false;
     }
    return $aPar;
}

function isImpar($array) {
    $aImpar = [];
    foreach ($array as &$n) {
       is_int($n) && (($n % 2) != 0)
        ? $aImpar [] = true
        : $aImpar [] = false;
    }
    return $aImpar;
}

echo 'isPar <br> ';
var_dump(isPar($arrayCualquiera)) ;
echo '<br> isImpar <br> ';
var_dump(isImpar($arrayCualquiera)) ;
?>

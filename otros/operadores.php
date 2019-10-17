<?php
// ***EJERCICIO 1***
// Calcula el resultado de 32+3 y 3(2+3).
$a = 32;
$b = 3;
$c = 2;

echo 'Operación 1: '.$res1 = $a+$b;
echo '<br/>Operación 1: '.$res2 = $b*($c+$b);

echo '<hr/>';

// ***EJERCICIO 2***
// Tomando en cuenta que tenemos una variable llamada $valor, ¿Cómo sería un condicional para las siguientes opciones?
$valor = 11;

if ($valor>5 && $valor<10) {
    echo '$valor es mayor que 5 pero menor que 10';
} elseif($valor>=0 && $valor<=20) {
    echo '$valor es mayor o igual a 0 pero menor o igual a 20';
} elseif ($valor === '10') {
    echo '$valor es igual a “10” asegurando que el tipo de dato sea cadena';
} elseif (($valor>0 && $valor<5) || ($valor>10 && $valor<15)) {
    echo '$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15';
}
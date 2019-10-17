<?php
// Ejercicios de arrays y ciclos
// *** EJERCICIO 1 ****
// Ordenarlo según como se indicó.
$arreglo = [
'keyStr1' => 'lado',
0 => 'ledo',
'keyStr2' => 'lido',
1 => 'lodo',
2 => 'ludo'
];

echo "$arreglo[keyStr1], $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2].<br/>";
echo 'decirlo al revés lo dudo.<br/>';
echo "$arreglo[2], $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr1]<br/>";
echo '¡Qué trabajo me ha costado!';

echo '<hr/>';

// *** EJERCICIO 2 ****
// Mostrar cada país con las 3 ciudades de cada país.
$ciudades = [
'Colombia' => ['Bogota', 'Medellin', 'Cali'],
'Argentina' => ['Buenos aires', 'Mendoza', 'Rosario'],
'Mexico' => ['Monterrey', 'Querétaro', 'Guadalajara'],
'Peru' => ['Lima', 'Cusco', 'Arequipa'],
'Ecuador' => ['Quito', 'Guayaquil', 'Cuenca']
];
// foreach($arreglo as $indice $valor)
foreach ($ciudades as $pais => $ciudades) {    
    echo 'Las principales ciudades de '.$pais.' son:'.'<br/>';
    echo '<ul>';
    foreach ($ciudades as $ciudad) {
        echo '<li>'.$ciudad.'</li>';
    }
    echo '</ul>';
}

echo '<hr/>';

// *** EJERCICIO 3 ****
// Mostrar 3 número mayores y 3 números menores de los que se incluyen en el array
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

echo 'Los 3 números mayores son:<br/>';
// rsort(): Ordena de mayor a menor
rsort($valores);
for($i=0; $i < 3 ; $i++) { 
    echo $valores[$i].'<br/>';
}

echo '<br/>Los 3 números menores son:<br/>';
// sort(): Ordena de menor a mayor
sort($valores);
for($i=0; $i < 3 ; $i++) { 
    echo $valores[$i].'<br/>';
}

<?php
// Se pasa por parametro la cantidad de meses para generar como resultado los años y meses, o solo meses o años según sea el caso.
function months($months){
    $years = floor($months/12);
    $extraMonths = $months % 12;
    if (($years>0) && ($extraMonths<=0)) {
        return "$years years.";
    } elseif(($years>0) && ($extraMonths<12)) {
        return "$years years $extraMonths months.";
    } elseif(($years<=0) && ($extraMonths<12)) {
        return "$extraMonths months.";
    }
}

echo months(37);

echo '<hr/>';
echo '<h2>Practica foreach</h2>';

$ciudades = [
    'Colombia' => ['Bogota', 'Medellin', 'Cali'],
    'Argentina' => ['Buenos aires', 'Mendoza', 'Rosario'],
    'Mexico' => ['Monterrey', 'Querétaro', 'Guadalajara'],
    'Peru' => ['Lima', 'Cusco', 'Arequipa'],
    'Ecuador' => ['Quito', 'Guayaquil', 'Cuenca']
    ];

foreach ($ciudades as $pais => $ciudad) {
    echo $pais.':<br/>';
    foreach ($ciudad as $valor) {
        echo $valor.' ';
    }
    echo '<br/>';
}
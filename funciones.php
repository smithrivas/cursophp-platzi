<?php
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
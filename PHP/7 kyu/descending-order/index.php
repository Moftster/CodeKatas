<?php

function descendingOrder(int $n): int {

    $convertIntegerToArray  = array_map('intval', str_split($n));

    rsort($convertIntegerToArray);

    // print_r($convertIntegerToArray);

    $toInteger = intval(implode($convertIntegerToArray));

    print_r($toInteger);

    return $toInteger;
}

descendingOrder(1021);
descendingOrder(9);
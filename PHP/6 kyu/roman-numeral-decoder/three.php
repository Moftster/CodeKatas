<?php 

function numeralToNumber ($numeral) {
    $arrayOfNumerals = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    $totalValue = 0;
    
    foreach ($arrayOfNumerals as $key => $value) {
        while(strpos($numeral, $key) === 0) {
            $totalValue += $value;
            $numeral = substr($numeral, strlen($key));
        }
    }

    echo $totalValue;

    return $totalValue;
}

// numeralToNumber('X');
numeralToNumber('MCCCXXXVII');
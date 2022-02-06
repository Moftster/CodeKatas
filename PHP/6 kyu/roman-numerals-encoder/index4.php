<?php 

// Create a function taking a positive integer as its parameter and returning a string containing the Roman Numeral representation of that integer.

// Modern Roman numerals are written by expressing each digit separately starting with the left most digit and skipping any digit with a value of zero. In Roman numerals 1990 is rendered: 1000=M, 900=CM, 90=XC; resulting in MCMXC. 2008 is written as 2000=MM, 8=VIII; or MMVIII. 1666 uses each Roman symbol in descending order: MDCLXVI.

function integertoRoman ($n) {
    $romanNumeral = '';

    $numberalsToNumber = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1,
    ];

    foreach ($numberalsToNumber as $numeral => $number) {
        if (($n / $number) > 1) {
            if ($number > 3 ) {
                echo "more than three";
            }
            echo "number of times " . $n / $number;
            // echo $numeral;
            $romanNumeral .= str_repeat($numeral, $n / $number);
            $n = $n - ($number * ($n / $number));
            // echo "This numeral goes!" . $numeral . "<br>";
        }
    }
    echo $romanNumeral;
}

integertoRoman(400);
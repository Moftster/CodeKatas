<?php 

// Given an integer n, your task is to complete the function convertToRoman which prints the corresponding roman number of n. Various symbols and their values are given below.
// I 1
// V 5
// X 10
// L 50
// C 100
// D 500
// M 1000

function numberToRomanNumeral ($number) {

    $numeralToNumber = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1,
    ];

    $romanNumeral = '';

    foreach ($numeralToNumber as $key => $index) {
        if (($number / $index) >= 1) {
            $mutiple = round($number / $index);
            $romanNumeral .= str_repeat($key, $mutiple);
            $number = $number % $index;
        }
    }

    echo $romanNumeral;

}

// numberToRomanNumeral(5);
// numberToRomanNumeral(10);
// numberToRomanNumeral(10);
numberToRomanNumeral(1105);

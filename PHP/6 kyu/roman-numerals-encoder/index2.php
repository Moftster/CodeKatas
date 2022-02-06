<?php 

// Given an integer n, your task is to complete the function convertToRoman which prints the corresponding roman number of n. Various symbols and their values are given below.

// I 1
// V 5
// X 10
// L 50
// C 100
// D 500
// M 1000

function calculateRomanNumerals ($n) {
    $romanNumerals = '';

    if ($n > 1000) {
        $numberOfLetters = $n / 1000;
		$romanNumerals .= str_repeat('M', $numberOfLetters); 
		$n = $n % 1000;
	}
	
    if ($n > 500) {
        $numberOfLetters = $n / 500;
		$romanNumerals .= str_repeat('D', $numberOfLetters); 
		$n = $n % 500;
	}

    if ($n > 100) {
        $numberOfLetters = $n / 100;
		$romanNumerals .= str_repeat('C', $numberOfLetters); 
		$n = $n % 100;
	}	

    if ($n > 50) {
        $numberOfLetters = $n / 50;
		$romanNumerals .= str_repeat('L', $numberOfLetters); 
		$n = $n % 50;
	}	

    if ($n > 10) {
        $numberOfLetters = $n / 10;
		$romanNumerals .= str_repeat('X', $numberOfLetters); 
		$n = $n % 10;
	}	
	
	if ($n > 5) {
        $numberOfLetters = $n / 5;
		$romanNumerals .= str_repeat('V', $numberOfLetters); 
		$n = $n % 5;
	}	
	
	if ($n > 0) {
        $numberOfLetters = $n / 1;
		$romanNumerals .= str_repeat('I', $numberOfLetters); 
	}	
    
    
	echo $romanNumerals;
    return $romanNumerals;

}

calculateRomanNumerals(8921);


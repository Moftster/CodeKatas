<?php

function expanded_form(int $n): string {
	
	$intToArray = str_split($n);

    $lengthOfNewArray = sizeof($intToArray);

    $reversedArray = array_reverse($intToArray);
   
    $answersArray = [];
	
    $multiplier = 10;

    // $removeZerosAndReindex = array_values(array_filter($reversedArray));
        
    	foreach ($reversedArray as $index => $value) { 
       
            $number = $value * ($multiplier / 10);

            $answersArray[] = $number;

            $multiplier = $multiplier * 10;

        }

        $switchBackArrayOrder = array_reverse($answersArray);
        
        $removeZeros = array_filter($switchBackArrayOrder);

        $convertToString = implode(" + ", $removeZeros);

        echo $convertToString;

	    return $convertToString;
}

// expanded_form(12035);

expanded_form(70304);
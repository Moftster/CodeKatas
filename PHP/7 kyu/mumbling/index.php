<?php

function accum($s) {
    // Split into array
    $stringToArray = str_split($s);
    // print_r($stringToArray);

    // Use index of array plus one to generate the number of letters
    $stringWithMultipliedNumbers = "";
    
    $multiplier = 1;

    foreach ($stringToArray as $individualLetter) {
        $letters = str_repeat($individualLetter, $multiplier);
        $FirstLetterUC = ucfirst(strtolower($letters));
        $toBeAppended = "-" . $FirstLetterUC;
        $stringWithMultipliedNumbers .= $toBeAppended;
        $multiplier += 1;
    }

    $finalStringWithOpeningDashRemoved = ltrim($stringWithMultipliedNumbers, '-');

    echo $finalStringWithOpeningDashRemoved;

    return $finalStringWithOpeningDashRemoved;

    // Convert back to string with dash in between
}


accum("ZpglnRxqenU"); // "Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu";
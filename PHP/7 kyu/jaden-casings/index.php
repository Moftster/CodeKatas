<?php

function toJadenCase($string) 
{
    //Convert sentence into array

    $sentenceToArrayOfWords = explode(" ", $string);
    // print_r($sentenceToArrayOfWords);

    //For each word capitalise first letter

    $theString = "";

    foreach($sentenceToArrayOfWords as $word) {
        $capitalisedWord = ucfirst($word);
        $toBeAppended = $capitalisedWord . " ";
        $theString .= $toBeAppended;
    }

    echo rtrim($theString);
    
    return rtrim($theString);

    //Convert array of capitalised words back into string
}

toJadenCase("How can mirrors be real if our eyes aren't real");
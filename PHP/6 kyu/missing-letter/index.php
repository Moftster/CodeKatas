<?php

// function find_missing_letter(array $array): string {

//     $convertArrayToString = implode($array);

//     // echo $convertArrayToString;


//     if(ctype_upper($convertArrayToString)) {
//         $alphabetArray = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
//         // echo "Use capitals";
//     } else {
//         $alphabetArray = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
//         // echo "Non capitals";
//     }
    
    
//     // convert to the same case
//     // $yourArray = array_map('strtolower', $array);

//     // Return first character of array
//     $firstCharacter = $array[0];

//     $indexOfFirstLetter = array_search($firstCharacter, $alphabetArray);
//     // print_r($indexOfFirstLetter);

//     $arrayLengthWeWantToReturn = sizeof($array) + 1;

//     // $indeciesToSelect = $indexOfFirstLetter + $arrayLengthWeWantToReturn;
//     // print_r($arrayLengthWeWantToReturn);

//     $returnPortionOfArray = array_slice($alphabetArray, $indexOfFirstLetter, $arrayLengthWeWantToReturn);

//     // print_r($returnPortionOfArray);

//     $differentCharacter = array_diff($returnPortionOfArray, $array);
    
//     echo implode($differentCharacter);
//     return implode($differentCharacter);


//     // print_r($yourArray);

//     // return the portion of the alphabet array
//     // $fullListOfLetters = array_slice($alphabetArray);


    
//     // return "";
//   }


// find_missing_letter(['g','B','c','D','f']);
// find_missing_letter(['g','B','c','D','f']);

// function find_missing_letter(array $array): string {
//     $alphabet = range($array[0], $array[count($array) - 1]);
//     print_r($alphabet);
    
//     return array_values(array_diff($alphabet, $array))[0];
//   }

// // find_missing_letter(['a','b','c','d','f']);

// find_missing_letter(["O", "Q", "R", "S"]);

$alphabet = range(d, p);
print_r($alphabet);
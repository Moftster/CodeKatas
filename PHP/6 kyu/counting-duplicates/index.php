<?php 

function duplicateCount($text) {

if(strlen($text) > 0) {

$stringToLowerCase = strtolower($text);
$stringToArray = str_split($stringToLowerCase);
$repeatedCharacters = "";

    foreach($stringToArray as $individualCharacter) {

        $count = substr_count($stringToLowerCase, $individualCharacter);

        // print_r($count);

        if($count > 1) {
            $repeatedCharacters .= $individualCharacter;
            // echo $repeatedCharacters;
        }
    }

    // echo $repeatedCharacters;

    if($repeatedCharacters){

    echo count(array_unique(str_split($repeatedCharacters)));
    return count(array_unique(str_split($repeatedCharacters)));
    } else {
        echo "No matches";
        return 0;
    }

} else {
    echo "Empty String";
    return 0;
}

}


// duplicateCount("aabBcde0412551");
// duplicateCount("Indivisibilities");
// duplicateCount("");
// duplicateCount("abcde");
duplicateCount("aabBcde");
// duplicateCount("Indivisibility");
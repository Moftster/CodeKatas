<?php


function abbrevName($name)
{
    $divide = explode(' ', $name);
    return strtoupper("{$divide[0][0]}.{$divide[1][0]}");
}

$name = "David Moftakhar";

print_r(abbrevName($name));

//
// function nameSplitter($x) {
//
//     $words = explode(" ", $x);
//
//     $string2 = array_pop($words);
//
//     $string1 = implode(' ', $words);
//
//     echo $string1[0] . "." . $string2[0];
//
//
//
//     // $lastWord = array_pop($y);
//     //
//     // echo $y . $lastWord;
//
//   }
//
// $name = "David Moftakhar";
//
// nameSplitter($name);


//
//
// function firstChar($y) {
//
//     $firstLetter = $y[0];
//
//     echo $firstLetter;
//
//   }
//
//
// $test = "Test";
//
// firstChar($test);

// Code Wars Solution
//
// function abbrevName($name)
// {
//   $abbreviate = "";
//   $wrds = explode(" ", $name);
//   $abbreviate .= strtoupper($wrds[0][0]) . "." . strtoupper($wrds[1][0]);
//   return $abbreviate;
// }
//
// Code Wars Solution
//
// function abbrevName(string $name): string
// {
//     $divide = explode(' ', $name);
//     return strtoupper("{$divide[0][0]}.{$divide[1][0]}");
// }
//
// Code Wars Solution
//
// function abbrevName($name){
//   $array = explode(' ', strtoupper($name));
//   return $array[0][0].'.'.$array[1][0];
// }

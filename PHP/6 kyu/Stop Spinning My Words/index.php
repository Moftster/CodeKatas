<?php

function spinWords(string $str): string {

  // convert to array

  $sentenceToArray = explode(" ", $str);

  // function for reversing string over 5 characters

  function switchWordsOverFiveCharacters($word) {

    if(strlen($word) >= 5) {
      return strrev($word);
    } else {
      return $word;
    }

  }

  $reverseWordsArrayMap = array_map('switchWordsOverFiveCharacters', $sentenceToArray);

  $convertBackToString = implode(" ", $reverseWordsArrayMap);

  print_r($convertBackToString);

  return $convertBackToString;

}

$string = "The rain in Spain falls mostly on the plain";

spinWords($string);

















































// function spinWords(string $str): string {
//
//   $toArray = explode(" ", $str);
//
//   // print_r($toArray);
//
//   $theBusiness = array_map(function($word){
//     if(strlen($word) >= 5) {
//       return strrev($word);
//     }
//     return $word;
//   }, $toArray);
//
//   print_r($theBusiness);
//
//   return implode(" ", $theBusiness);
//
// }
//
// $string = "Hey fellow warriors";
//
// spinWords($string);












































//solution
//
// function spinWords(string $str): string {
//     $words = explode(' ', $str);
//     $spunwords = array_map(function($word) {
//       if (strlen($word) >= 5) {
//         return strrev($word);
//       }
//       return $word;
//     }, $words);
//
//     print_r($spunwords);
//
//     return implode(' ', $spunwords);
//
// }
//
// $string = "Hey fellow warriors";
//
// spinWords($string);

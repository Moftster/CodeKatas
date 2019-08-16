<?php

function DNA_strand($dna) {

// convert string to array

$stringtoArray = str_split($dna);

$worked = array_map(function($letterConvert) {

  if($letterConvert == 'T') {
    return 'A';
  } elseif ($letterConvert == 'A') {
    return 'T';
  } elseif ($letterConvert == 'G') {
    return 'C';
  } elseif ($letterConvert == 'C') {
    return 'G';
  }

}, $stringtoArray);

$backToString = implode($worked);

echo $backToString;

return $backToString;

}

$dnaTest = "TAACG";

DNA_strand($dnaTest);

 ?>

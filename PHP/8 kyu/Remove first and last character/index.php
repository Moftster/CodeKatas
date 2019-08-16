<?php

function remove_char(string $s): string {

  $fromRight = substr($s, 0, -1);

  $fromLeft = substr($fromRight, 1);

  echo $fromLeft;

  return $fromLeft;

}

$testString = "hello there harry hill";

remove_char($testString);

// 
// Code Kata Solution 1
//
// function remove_char(string $s): string {
//   return substr($s, 1, -1);
// }

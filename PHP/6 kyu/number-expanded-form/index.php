<?php

function expanded_form(int $n): string {

  $count = strlen($n);

  foreach(str_split($n) as $key => $value){
    
    if($value != 0){
      $string[] = str_pad($value,$count,"0");
    } 

    $count--;

  }

  echo implode(" + ", $string);

  return implode(" + ", $string);
  
} 

expanded_form(70304);
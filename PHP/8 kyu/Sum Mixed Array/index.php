<?php

function sum_mix($a) {

  $convertInteger = (int)$a;
  //
  // var_dump($convertInteger);
  //
  // echo $convertInteger;


  $sum = array_sum($a);

  echo $sum;



}

$test = ["1", 2, 10, "55"];

sum_mix($test);

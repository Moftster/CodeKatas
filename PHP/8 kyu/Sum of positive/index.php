<?php

function positive_sum($arr) {

  $array = 0;

  foreach($arr as $ar){

    if($ar >= 0) {

      $convertToArray = floatval($ar);

      $array = $array + $convertToArray;

    }

  }

  var_dump($array);

}

$numbers = [0.1, 0.2, 0.3, 0.4, -0.5];

positive_sum($numbers);

<?php

function getCount($str) {
  $vowelsCount = 0;

  {

    preg_match_all('/[aeiou]/i', $str, $matches);

    $vowelsCount = count($matches[0]);

  }

  var_dump($vowelsCount);

  return $vowelsCount;

}


$string = "hellotherehowmanyvowelsuuuuu";

getCount($string);

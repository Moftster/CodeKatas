<?php

function vertMirror($s) {

    $splitString = explode("\n", $s);


    $magic = array_map(function ($stringRev) {

          $reverseString = strrev($stringRev);

          return $reverseString;

        }, $splitString);

    $backtoString = implode("\n", $magic);

    print_r($backtoString);

    return $backtoString;
}

function horMirror($s) {

    $splitStringTwo = explode("\n", $s);

    $reverseArray = array_reverse($splitStringTwo);

    $backtoStringTwo = implode("\n", $reverseArray);

    print_r($backtoStringTwo);

    return $backtoStringTwo;

}
function oper($fct, $s) {
  if($fct == 'vertMirror') {

    $splitString = explode("\n", $s);

    $magic = array_map(function ($stringRev) {

          $reverseString = strrev($stringRev);

          return $reverseString;

        }, $splitString);

    $backtoString = implode("\n", $magic);

    print_r($backtoString);

    return $backtoString;

  } else {

    $splitStringTwo = explode("\n", $s);

    $reverseArray = array_reverse($splitStringTwo);

    $backtoStringTwo = implode("\n", $reverseArray);

    print_r($backtoStringTwo);

    return $backtoStringTwo;

  }
}

$function = "vertMirror";

$test = "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu";

oper($function, $test);

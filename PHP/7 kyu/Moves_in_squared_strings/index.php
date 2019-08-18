<?php

function vertMirror($s) {
    // $inputOrder = "abcd\nefgh\nijkl\nmnop";
    // $outputOrder = "dcba\nhgfe\nlkji\nponm";
    // $reverseOne = strtr($s, "abcd\nefgh\nijkl\nmnop\nqrst\nuvwx\nyz", "dcba\nhgfe\nlkji\nponm\ntsrq\nxwvu\nzy");
    // echo $reverseOne;
    // return $reverseOne;

    $splitString = explode("\n", $s);

    function theMagic ($stringRev) {
      $reverseString = strrev($stringRev);
      return $reverseString;
    }

    $magic = array_map('theMagic', $splitString);

    $backtoString = implode($magic);

    print_r($backtoString);
}
function horMirror($s) {
    $reverseTwo = strrev($s);
    echo $reverseTwo;
    return $reverseTwo;
}
function oper($fct, $s) {
  if($fct == 'vert_mirror') {
    $reverseOne = strtr($s, "abcd\nefgh\nijkl\nmnop\nqrst\nuvwx\nyz", "dcba\nhgfe\nlkji\nponm\ntsrq\nxwvu\nzy");
    echo $reverseOne;
    return $reverseOne;
  } else {
    $reverseTwo = strtr($s, "abcd\nefgh\nijkl\nmnop\nqrst\nuvwx\nyz", "yz\nuvwx\nqrst\nmnop\nijkl\nefgh\nabcd");
    echo $reverseTwo;
    return $reverseTwo;
  }
}


// $test = "abcd\nefgh\nijkl\nmnop";
//


$test = "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu";

vertMirror($test);

// $function = 'vert_mirror';


// oper($function, $test);

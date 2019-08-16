<?php


function printerError($s) {

$numberOfOutputs = strlen($s);

$numberOfErrors = 0;

{

  preg_match_all('/[nopqrstuvwxyz]/i', $s, $matches);

  $numberOfErrors = count($matches[0]);

}

echo $numberOfErrors . "/" . $numberOfOutputs;

}




// $string="aaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";
// $this->revTest(printerError($s), "3/56");
$string = "kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzfffyyy";
// $this->revTest(printerError($s), "6/60");

printerError($string);

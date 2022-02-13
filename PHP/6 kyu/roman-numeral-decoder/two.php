<?php 

$romans = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1,
);

$roman = 'MCCCXXXVII';
$result = 0;

// echo strpos("I love php, I love php too!","php") . "\n";
echo strpos("David!","David") . "\n";
foreach ($romans as $key => $value) {
    // echo strpos($roman, $key) . "\n";;
    while (strpos($roman, $key) === 0) {
        // echo $roman . "\n";
        // echo $key . "\n";
        // echo $value . "\n";
        $result += $value;
        $roman = substr($roman, strlen($key));
    }
}
echo $result;
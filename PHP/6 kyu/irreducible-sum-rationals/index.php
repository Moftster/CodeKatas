<?php 

function sumFracts($l) {
    $divisors = [];
    foreach($l as $a) {
        // echo "This is one set " . implode($a) . "<br>";
        $lastInt = end($a);
        $divisors[] = $lastInt;
        // return $lastInt;
    }

    // $lowestCommonDenominator = gmp_lcm(3, 7);


}

// sumFracts([[2, 7], [1, 3], [1, 12]]); // Should equal 59/84

sumFracts([[12, 3], [15, 3]]); // Should equal 9

// sumFracts([[1, 3], [5, 3]]); // Should equal 2

$gcd = gmp_gcd("12", "21");
echo gmp_strval($gcd) . "\n";
<?php

function multiply($arr)
{
    $multiplier = 1;

    $arrayNumber = count($arr);

    for ($i = 0; $i < $arrayNumber; $i++)
        $multiplier = $multiplier * $arr[$i];
    return $multiplier;
}

$arr = array(1, 2, 3, 4);

// $n = sizeof($arr) / sizeof($arr[0]);

echo multiply($arr);

?>

<br>

<?php

echo(count($arr));

// $input = array(10,6,3);
//
// print_r(array_product($input));

// function grow($a) {
//
//     $b = current($a) * next($a);
//
//     echo $b;
//
// }
//
//
// $a = [5, 2, 3, 4];
//
// grow($a);


// Code Kata Alternative
//
// function grow($a) {
//
//   if ( !empty($a) ) {
//         return $result = array_product($a);
//     }
// }

?>

<?php
function getOddOccurrence($arr, $arr_size)
{
    $count = 0;
    for ($i = 0; $i < $arr_size; $i++)
    {

        for ($j = 0; $j < $arr_size; $j++)
        {
            if ($arr[$i] == $arr[$j])
                $count++;
                echo $count . "<br>";
        }
        if ($count % 2 != 0)
            return $arr[$i] . " is the odd number";
    }
    return "There's no odd number integer.";
}

$arr = array(3, 4, 5, 2, 4, 3, 5, 2, 4, 4, 2, 2, 4);
$n = sizeof($arr);

// Function calling
echo(getOddOccurrence($arr, $n));

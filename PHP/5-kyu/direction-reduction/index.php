<?php

function dirReduc($arr){

    // Convert to same case

    // Count values in array

    // North vs South - if one higher than the other it goes to array

    // East vs West - if one higher than the other it goes to array
    
    foreach($arr as $a) {
        echo $a . "<br>";
    }
}

$a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
dirReduc($a);
<?php

function dirReduc($arr){

    // Convert to same case
    foreach($arr as $a) {
        echo $a . "<br>";
    }
}

$a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
dirReduc($a);
<?php

function dirReduc($arr){

    $arr = array_map('strtolower', $arr);

    $north = 0;
    $south = 0;
    $east = 0;
    $west = 0;

    foreach($arr as $a) {
        if($a === "north") {
            $north += 1;
        }
        if($a === "south") {
            $south += 1;
        }
        if($a === "east") {
            $east += 1;
        }
        if($a === "west") {
            $west += 1;
        }
    }

    $northOrSouth = $north - $south;

    $eastOrWest = $east - $west;

    $newDirections = [];

    if($northOrSouth > 0) {
        $newDirections[] = "north";
    } elseif($northOrSouth < 0) {
        $newDirections[] = "south";
    } 

    if($eastOrWest > 0) {
        $newDirections[] = "east";
    } elseif($eastOrWest < 0) {
        $newDirections[] = "west";
    } 

    print_r($newDirections);

}

$a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
dirReduc($a); // Answer WEST

$c = ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH","NORTH"];
// dirReduc($c); // Answer NORTH

$b=["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"];
dirReduc($b); // Answer empty array


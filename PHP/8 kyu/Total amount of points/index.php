<?php

function points(array $games): int {

  $wins = 0;

  $draws = 0;

  foreach($games as $game) {

    if(intval($game[0]) > intval($game[-1])) {

      $win = 1;

      $wins = $wins + $win;

    } elseif(intval($game[0]) == intval($game[-1])) {

      $draw = 1;

      $draws = $draws + $draw;

    }

}

$points = ($wins * 3) + ($draws * 1);

var_dump($points);

return $points;

}

// function points(array $games): int {
//
//   $wins = 0;
//
//   $draws = 0;
//
//   foreach($games as $game) {
//
//     if(intval($game[0]) > intval($game[-1])) {
//
//       $win = 1;
//
//       $wins = $wins + $win;
//
//     } elseif(intval($game[0]) == intval($game[-1])) {
//
//       $draw = 1;
//
//       $draws = $draws + $draw;
//
//     }
//
// }
//
// var_dump($wins);
//
// var_dump($draws);
//
// $points = ($wins * 3) + ($draws * 1);
//
// var_dump($points);
//
// return $points;
//
// }


$scores = ['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3'];

points($scores);


 ?>

<?php


function sequence_sum(int $begin, int $end, int $step): int {

$total = 0;

if($begin > $end) {

  echo 0;

  return 0;

} else {

  for($i = $begin; $i <= $end; $i += $step)

  {

    $total += $i;

  }

  echo $total;

  return $total;

  }

}



$start = 2;
$finish = 6;
$increment = 2;

sequence_sum($start, $finish, $increment);

<?php

for ($a=1; $a<=100; $a++) {

  if($a % 3 == 0 && $a % 5 ==0) {

    echo "FizzBuzz ";

  }

  elseif ($a % 3 == 0) {

    echo "Fizz ";

  }

  elseif($a % 5 ==0) {

    echo "Buzz ";

  } else {

  echo $a." ";

  }

}

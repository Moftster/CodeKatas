<?php

function matchingCharacters($feed) {

  $noOfCharacters = sizeof($feed)-1;
  $count = 0;
      for($i=0; $i<=$noOfCharacters; $i++) {

        echo "This is the for X loop " . $i . "<br>";

      for($j=0; $j<=$noOfCharacters; $j++) {

        echo "This is the for J loop " . $j . "<br>";

      if($feed[$i]==$feed[$j]) {
        $count++;
        echo "This is where the matches occour" . $count . "<br>";

      }
            }
      if($count % 2 != 0) {
      return $feed[$i] . " is the odd number <br>";
    }
      }
    return "There is no odd number";

}

echo matchingCharacters([1,1,2,3,3,2,9,9,9,9,6]);

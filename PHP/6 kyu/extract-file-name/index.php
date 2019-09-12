<?php

function fileNameExtractor(string $dirtyFileName): string {


  $replaceRight = substr($dirtyFileName, strpos($dirtyFileName, '_'));

  // $replaceRight = substr($dirtyFileName, 0, strrpos($dirtyFileName, "_"));

	//$replace = preg_replace("/[^a-zA-Z_.]/", "", $dirtyFileName);

	//$matches = preg_split('/_/', $dirtyFileName);
	// preg_match('/_/', $dirtyFileName, $matches, PREG_OFFSET_CAPTURE);
	$removeLeft = ltrim($replaceRight, '_');

  $answer = substr($removeLeft, 0, strrpos($removeLeft, "."));

	print_r($answer);

	return $answer;
}

// Solution 1

function fileNameExtractor(string $dirtyFileName): string {
    preg_match("/\d*_(.*)\./",$dirtyFileName,$result);
    return $result[1];
}

// Solution 2

function fileNameExtractor(string $dirtyFileName): string {
    $nm3 = explode (".", preg_replace("/[0-9]+_/", "", $dirtyFileName));
    return $nm3[0].'.'.$nm3[1];
}

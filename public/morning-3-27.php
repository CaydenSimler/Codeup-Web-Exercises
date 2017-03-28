<?php 

// $letter = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h', 'j', 'k', 'l'];
// $sortedLetters = [];
// $range = range('a', 'z');


// function sortArray($initialArray, $sortedArray, $range){

// 	$k = 0;
// 	$i = 0;


// for ($i=0; $i < count($initialArray); $i) { 
// 	if ($range[$k] !== $initialArray[$i]) {
// 		$i++;
// 	} else {
// 		array_push($sortedArray, $initialArray[$i]);
// 		$i = 0;
// 		$k++;
// 	}
// }

// 	return $sortedArray;

// }

// $sortedLetters = sortArray($letter, $sortedLetters, $range);

// foreach ($sortedLetters as $letter) {
// 	echo $letter . PHP_EOL;
// }


$letter = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h', 'j', 'k', 'l', 'z'];

function sortIt($array) {
	$newArray = [];

	$alphabet = range('a', 'z');


	foreach ($alphabet as $letter) {
		$number = array_search($letter, $array);

		if (is_numeric($number) == true) {
			$newArray[] = $letter;
		}
	}

	return $newArray;
}

$output = sortIt($letter);
print_r($output);






?>
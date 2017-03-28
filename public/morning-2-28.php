<?php 


$vowelsArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'o', 'm', 'z', 'u', 'w'];

function removeVowels($array) {
	$newArray = [];

	foreach ($array as $vowel) {
		if (
			!strstr($vowel, 'a') && 
			!strstr($vowel, 'e') && 
			!strstr($vowel, 'i') && 
			!strstr($vowel, 'o') && 
			!strstr($vowel, 'u')
			) {
				array_push($newArray, $vowel);
		}
	}
	return $newArray;
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Stripping Vowels</title>


</head>
<body>

	<ul>
		<?php foreach (removeVowels($vowelsArray) as $nonVowel): ?>
			<?= "<li><h1> $nonVowel </h1></li>" ?>
		<?php endforeach; ?>
	</ul>

</body>
</html>




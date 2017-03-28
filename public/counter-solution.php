<?php 

// on page load, set counter to 0
// make a button or link that increments counter by 1
// make a button or link that decrements counter by 1



function pageController() {
	$data = [];

	
	// "null coallesce" = if a value exists, get that value and assign to variable, else assign default value
	if (isset($_GET['count'])) {
		$data['count'] = $_GET['count'];
	} else {
		$data['count'] = 0;
	}

	return $data;
}


extract(pageController());

?>


<!DOCTYPE html>
<html>
<head>
	<title>Counter Solution</title>
</head>
<body>

	<h1>Counter: <?= $count; ?></h1>
	<a href="counter-solution.php?count=<?= $count + 1 ?>">Up</a>
	<a href="counter-solution.php?count=<?= $count - 1 ?>">Down</a>

</body>
</html>
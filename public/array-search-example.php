<?php 


$foods = [
	'fruit' => 'apple',
	'meat' => 'chicken',
	'veggie' => 'zucchini',
];

if (isset($_GET['search'])) {

	$foodToFind = strtolower($GET['search']);

	$searchResult = array_search($foodToFind, $foods);
}

?>


<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>

	<form method="GET">
		<input type="text" name="search" id="search" placeholder="Search for Foods">
		<button type="submit">Search</button>
	</form>



</body>
</html>





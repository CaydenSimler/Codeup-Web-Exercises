<?php 
	

	var_dump($_GET);

	function pageController(){
		$data = [];

		if (isset($_GET['name'])) {
			$data['myname'] = $_GET['name'];
		} else {
			$data['myname'] = '_____';
		}

		if (isset($_GET['age'])) {
			$data['myage'] = $_GET['age'];
		} else {
			$data['myage'] = '__';
		}

		return $data;
	}

	extract(pageController());


?>



<!DOCTYPE html>
<html>
<head>
	<title>Get Lecture</title>
</head>
<body>

<form action="" method="get" accept-charset="utf-8">
	<label>Search</label>
	<input type="text" name="name" placeholder="Search term">
	<input type="text" name="age" placeholder="Search term">
	<button type="submit">Search</button>


</form>

	<h1> 
		<?= "My name is " . $myname . " and I am " . $myage . " years old."?>
	</h1>

</body>
</html>
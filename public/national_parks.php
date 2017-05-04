<?php 
define("DB_HOST", "localhost");
define("DB_NAME", "parks_db");
define("DB_USER", "parks_user");
define("DB_PASS", "password");

require ('db_connect.php');
require ('functions.php');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (inputGet('page') && is_numeric($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <= 3) {
	$pageNumber = $_GET['page'];
	$offset = (($_GET['page'])-1)*4;
	$nationalParksInfo = $dbc->prepare('SELECT * FROM national_parks LIMIT ' . $offset . ', 4');
	$nationalParksInfo->execute();
} else {
	header('Location: national_parks.php?page=1');
	$pageNumber = 1;
	$nationalParksInfo = $dbc->prepare('SELECT * FROM national_parks LIMIT 4');
	$nationalParksInfo->execute();
}

if (inputGet('submit')) {
	$parkName = htmlspecialchars(strip_tags(trim($_POST['parkName'])));
	$parkLocation = htmlspecialchars(strip_tags(trim($_POST['parkLocation'])));
	$parkEstablished = htmlspecialchars(strip_tags(trim($_POST['parkEstablished'])));
	$parkAcres = htmlspecialchars(strip_tags(trim($_POST['parkAcres'])));
	$parkAcres = (int) $parkAcres;
	$parkDescription = htmlspecialchars(strip_tags(trim($_POST['parkDescription'])));

	$insert = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)";

	$stmt = $dbc->prepare($insert);

	$stmt->execute(array(':name' => $parkName, ':location' => $parkLocation, ':date_established' => $parkEstablished, ':area_in_acres' => $parkAcres, ':description' => $parkDescription));

	$pageNumber = $_GET['page'];
	$offset = (($_GET['page'])-1)*4;
	$nationalParksInfo = $dbc->prepare('SELECT * FROM national_parks LIMIT ' . $offset . ', 4');
	$nationalParksInfo->execute();
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<style>

		.center {
			text-align: center;
		}

		body {
			font-family: 'PT Sans', sans-serif;
			background-color: #383836;
			color: white;
		}

		h1 {
			font-size: 10vw;
		}

		.bold {
			font-weight: bold;
			font-size: 3vw;
		}

		a {
			font-size: 110px;
		}

		.content {
			font-size: 1vw;
		}

		form {
			color: #383836;
		}

		input {
			width: 150px;
		}

	</style>
</head>
<body>

	<div class="col-xs-12">
		<div class="col-xs-2 center">
			<a href="national_parks.php?page=<?= $pageNumber - 1 ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
		</div>
		<div class="col-xs-8">
			<h1 class="center">National Parks</h1>
		</div>
		<div class="col-xs-2 center">
			<a href="national_parks.php?page=<?= $pageNumber + 1 ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>

	<form action="" method="POST">
		<div class="col-xs-12">
			<div class="col-xs-2 formInputColumn2">
				<input type="parkName" name="parkName" id="parkName" placeholder="Name">
			</div>
			<div class="col-xs-2 formInputColumn2">
				<input type="parkLocation" name="parkLocation" id="parkLocation" placeholder="Location">
			</div>
			<div class="col-xs-2 formInputColumn2">
				<input type="parkEstablished" name="parkEstablished" id="parkEstablished" placeholder="Date Established YYYY-MM-DD">
			</div>
			<div class="col-xs-2 formInputColumn2">
				<input type="parkAcres" name="parkAcres" id="parkAcres" placeholder="Area in Acres">
			</div>
			<div class="col-xs-2 formInput">
				<input type="parkDescription" name="parkDescription" id="parkDescription" placeholder="Description">
			</div>
			<div class="col-xs-2 submit">
				<input type="submit" name="submit" id="submit">
			</div>

		</div>
	</form>

	<div class="col-xs-12 center">
		<div class="col-xs-2 bold">Name</div>
		<div class="col-xs-2 bold">Location</div>
		<div class="col-xs-2 bold">Established</div>
		<div class="col-xs-2 bold">Acres</div>
		<div class="col-xs-4 bold">Description</div>
	</div>

	<p class="invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas voluptates facere excepturi quos</p>

	<?php foreach ($nationalParksInfo as $indexName): ?>
		<div class="col-xs-12 center">
			<?= '<div class="col-xs-2 content">' . $indexName['name'] . '</div>' .
			'<div class="col-xs-2 content">' . $indexName['location'] . '</div>' .
			'<div class="col-xs-2 content">' . $indexName['date_established'] . '</div>' .
			'<div class="col-xs-2 content">' . $indexName['area_in_acres'] . '</div>' . 
			'<div class="col-xs-4 content">' . $indexName['description'] . '</div>'?>
		</div>

		<p class="invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas voluptates facere excepturi quos</p>
	<?php endforeach; ?>

<!-- FONT AWESOME -->
<script src="https://use.fontawesome.com/788edc112b.js"></script>
	
</body>
</html>
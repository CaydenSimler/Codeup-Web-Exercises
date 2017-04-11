<?php 
define("DB_HOST", "localhost");
define("DB_NAME", "parks_db");
define("DB_USER", "parks_user");
define("DB_PASS", "password");

require ('db_connect.php');
require ('functions.php');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbc->query('SELECT * FROM national_parks');

$resultCount = $stmt->rowCount();

if (inputGet('page') && is_numeric($_GET['page']) && $_GET['page'] >= 1) {
	$pageNumber = $_GET['page'];
	$offset = (($_GET['page'])-1)*4;
	$nationalParksInfo = $dbc->query('SELECT * FROM national_parks LIMIT ' . $offset . ', 4');
} else if (!inputGet('page') || $_GET['page'] < 1 || !is_numeric($_GET['page'])) {
	header('Location: national_parks.php?page=1');
	$pageNumber = 1;
	$nationalParksInfo = $dbc->query('SELECT * FROM national_parks LIMIT 4');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.center {
			text-align: center;
		}
	</style>
</head>
<body>

	<h1 class="center">National Parks</h1>
	<div class="col-xs-6 center">
		<a href="national_parks.php?page=<?= $pageNumber - 1 ?>">Previous</a>
	</div>
	<div class="col-xs-6 center">
		<a href="national_parks.php?page=<?= $pageNumber + 1 ?>">Next</a>
	</div>

	<div class="col-xs-12 center">
		<div class="col-xs-3">Name</div>
		<div class="col-xs-3">Location</div>
		<div class="col-xs-3">Date Established</div>
		<div class="col-xs-3">Area in Acres</div>
	<hr>
	</div>

	<?php foreach ($nationalParksInfo as $indexName): ?>
		<div class="col-xs-12 center">
			<?= '<div class="col-xs-3">' . $indexName['name'] . '</div>' .
			'<div class="col-xs-3">' . $indexName['location'] . '</div>' .
			'<div class="col-xs-3">' . $indexName['date_established'] . '</div>' .
			'<div class="col-xs-3">' . $indexName['area_in_acres'] . '</div>' ?>
		</div>
	<?php endforeach; ?>

	</table>

	
</body>
</html>
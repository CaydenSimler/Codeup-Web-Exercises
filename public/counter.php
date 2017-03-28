<?php 
	require('counter-controller.php');
	extract(counter());

	if($inc === "up") {
	   $counter++;
	} else if($inc === "down") {
	   $counter--;
	}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Counter PHP Exercise</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.header {
			font-size: 200px;
			text-align: center;
		}

		.counter {
			font-size: 200px;
			color: #212121;
			text-align: center;
		}

		hr {
			border: 5px solid white;
		}
	</style>
</head>

<body>

<hr>

	<h1 class="header">
		<form method="get" action="">
			<a href="counter.php?inc=up&counter=<?= $counter; ?>">
				<div class="glyphicon glyphicon-hand-up"></div>
			</a>
    	</form>
	</h1>

	<h2 class="counter">
		<?= $counter; ?>
	</h2>

	<h1 class="header">
		<form method="get" action="">
			<a href="counter.php?inc=down&counter=<?= $counter; ?>">
				<div class="glyphicon glyphicon-hand-down"></div>
			</a>
    	</form>
	</h1>

<!-- Latest compiled and minified jQuery -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>


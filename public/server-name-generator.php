<?php

	require("server-generator-controller.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>

	<link rel="stylesheet" href="css/bootstrap.css">

	<style>
		.serverName {
			font-size: 70px;
			background-color: black;
			font-weight: bold;
			text-align: center;
		}

		body {
			color: <?= $randomColor[$randomNumber]; ?>;
			background-color: <?= $randomColor[$randomNumber]; ?>;	
		}


	</style>

</head>
<body>

	<h2>
		<div class="serverName">
			Server Name: <?= $randomAdjective[$randomNumber] . " " . $randomNoun[randomNumber()]; ?>
		</div>
	</h2>



</body>
</html>
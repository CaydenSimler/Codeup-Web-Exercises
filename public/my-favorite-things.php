<?php

	require("favorite-things-controller.php");

?>





<!DOCTYPE html>
<html>
<head>
	<title>Favorite Things</title>

	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
	.favoriteThingsTable {
		border: 2px solid blue;
		padding: 30px;
		font-size: 30px;
		text-align: center;
		align-content: center;
		margin-left:auto; 
    	margin-right:auto;
	}

	th {
		text-align: center;
	}

	.favoriteThingsHeader{
		text-align: center;
		font-size: 70px;
	}

	.invisible {
		font-size: 10px;
	}

	</style>

</head>
<body>
	
	<h2 class="favoriteThingsHeader">My Favorite Things</h2>
	<table class="favoriteThingsTable">
		<thead>
			<tr>
				<th>Number |</th>
				<th>| Favorite Thing</th>
			</tr>

		</thead>
		<tbody>
			<tr>
				<td><div class="invisible">-</div></td>
				<td><div class="invisible">-</div></td>
			</tr>
			<?php foreach ($favoriteThings as $key => $item): ?>
				<tr>
					<td> <?= ($key+1) ?> </td>
					<td> <?= $item ?> </td>
				</tr>
			<?php endforeach; ?>

			<tr>
				<td><div class="invisible">-</div></td>
				<td><div class="invisible">-</div></td>
			</tr>
		</tbody>
	</table>

</body>
</html>
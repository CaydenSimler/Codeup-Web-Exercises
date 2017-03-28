<?php

	function favoriteThings(){
		$favoriteThings = ['Food', 'Sleep', 'Family', 'Gaming', 'Travelling', 'Sleeping'];
		return $favoriteThings;
	}

	function randomNumber(){
		$randomNumber = mt_rand(0, 9);

		return $randomNumber;
	}

	function randomAdjective(){
		$adjective = ['Obedient', 'Cold', 'Pushy', 'Harsh', 'Prickly', 'Alcoholic', 'Bizarre', 'Purple', 'Attractive', 'Quirky'];

		return $adjective;
	}

	function randomNoun(){
		$noun = ['Snail', 'Airport', 'Afterthought', 'Car', 'Wax', 'Secretary', 'Party', 'Poison', 'Dog', 'Volleyball'];

		return $noun;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Model/View/Controller</title>
</head>
<body>
	
	<?php
		echo "<h2><center>Server Name: " . randomAdjective()[randomNumber()] . " " . randomNoun()[randomNumber()] . "</center></h2>";		
	?>

	<hr>
	<h2>My Favorite Things</h2>
	<table border="1" color="blue">
		<thead>
			<tr>
				<th>Number</th>
				<th>Item</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach (favoriteThings() as $key => $item) {
					echo
						"<tr>
							<td>" . ($key+1) . "</td>
							<td>$item</td>
						</tr>";
				}
			?>
		</tbody>
	</table>

</body>
</html>
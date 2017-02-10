<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>

<html>

<head>

	<title>Gino's Generic Pizza Sign Up!</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

</head>

<body>
		
	<center><h1>Congratulations on creating your order with Gino's Generic Online Pizza Maker! To continue, we just need a few more bits of information before your order is sent to the "kitchen". Please fill out that information in the provided boxes below:</h1></center>

<hr>

		<h3>Address Information:</h3>

			<form action="registration.php" method="POST">

				<p>
					<label for="address"></label>
					<input type="text" name="address" id="address" placeholder="Street Address">
				</p>

				<p>
					<label for="city"></label>
					<input type="text" name="city" id="city" placeholder="City">
				</p>

				<p>
					<label for="zipcode"></label>
					<input type="text" name="zipcode" id="zipcode" placeholder="Zipcode">
				</p>

				<p>
					<label for="state"></label>
					<select name="state" id="state">
						<option>Texas</option>
						<option>Also Texas</option>
						<option>Still Texas</option>
					</select>
				</p>

			<button type="submit"><a href="profile.php">Submit</a></button>


			</form>






</body>












</html>
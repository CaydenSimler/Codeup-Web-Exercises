<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>

<html>
	
<head>

	<title>Housing Search</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
	
	<center><h1>Looking for a house? Well look no further! Below you will find all the parameters you need to search for the best possible place for you! Just input the desired information, and let us take care of the rest!</h1></center>

<hr>

	<form action="house_search.php">

		<p>
			<label for="zipcode"><h3>Desired zip code:</h3></label>
			<input type="text" name="zipcode" id="zipcode" required>
		</p>

		<p>
			<label for="size"><h3>Select a housing type:</h3></label>
			<select name="house_type" id="house_type">
				<option>House</option>
				<option>Apartment</option>
				<option>Cardboard Box</option>
				<option>Trailer Park</option>
			</select>
		</p>

		<p>
			<label for="bedrooms"><h3>Select amount of bedrooms:</h3></label>
			<select name="bedrooms" id="bedrooms">
				<option>Studio (0)</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>

		</p>

		<p>
			<label for="bathrooms"><h3>Select amount of bathrooms:</h3></label>
			<select name="bathrooms" id="bathrooms">
				<option>1</option>
				<option>2</option>
				<option>3</option>

			</select>

		</p>



		<p>
			<h3>Pets allowed?</h3>

			<label>
				<input type="radio" name="pets" value="yes">Yes
			</label>

			<label>
				<input type="radio" name="pets" value="no">no
			</label>


		</p>

		<button type="submit">Submit!</button>





	</form>






</body>





</html>
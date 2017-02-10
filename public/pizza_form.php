<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>

<html>
	
<head>

	<title>Gino's Generic Pizza</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
		
	<main><h1><center>Welcome to Gino's Generic Pizza!</center></h1></main>

		<center><h3>If you have money, go ahead and start placing your order below! If you don't have money, you can also place your order below because this is not real and you're not going to be getting a pizza in return anyways!</h3></center>

<hr>

		<center>

			<form action="pizza_form.php" method="POST">
				
				<label for="size"><h3>Start by selecting the size you want:</h3></label>
				<select name="size" id="size" required>
					<option>Small: 8"</option>
					<option>Medium: 12"</option>
					<option>Large: 100"</option>
				</select>

		<p>
		<table border="1">

			<tr>
				<th>Pizza Size</th>
				<th>Slices Per Person</th>
			</tr>

			<tr>
				<td>8"</td>
				<td>4 Slices</td>
			</tr>

			<tr>
				<td>12"</td>
				<td>6 Slices</td>
			</tr>

			<tr>
				<td>100"</td>
				<td>50 Slices</td>
			</tr>

		</table>
		</p>

			<label for="crust"><h3>Select your crust type:</h3></label>
			<select name="crust" id="crust" required>
				<option>Deep Dish</option>
				<option>Thin Crust</option>
				<option>Pan</option>
				<option>Gluten-Free</option>
			</select>

			<label for="cheese"><h3>Select your cheese type:</h3></label>
			<select name="cheese" id="cheese" required>
				<option>Mozzarella</option>
				<option>Provolone</option>
				<option>Cheddar</option>
			</select>

			<label for="sauce"><h3>Select your sauce type:</h3></label>
			<select name="sauce" id="sauce" required>
				<option>Fresh Tomato</option>
				<option>Rich Marinara</option>
				<option>Creamy Alfredo</option>
				<option>None</option>
			</select>




			<p><h3>Next, choose your toppings:</h3></p>

			<h4>Meats</h4>

			<label><input type="checkbox" id="t1" name="t[]"><img src="img/pepperoni.jpeg" width="100" height="100" alt="pepperoni"></label>

			<label><input type="checkbox" id="t2" name="t[]"><img src="img/ham.jpeg" width="100" height="100" alt="ham"></label>

			<label><input type="checkbox" id="t3" name="t[]"><img src="img/bacon.jpeg" width="100" height="100" alt="bacon"></label>

			<label><input type="checkbox" id="t4" name="t[]"><img src="img/sausage.jpeg" width="100" height="100" alt="sausage"></label>

			<label><input type="checkbox" id="t5" name="t[]"><img src="img/chicken.jpeg" width="100" height="100" alt="chicken"></label>

<br>

			<h4>Veggies</h4>

			<label><input type="checkbox" id="t6" name="t[]"><img src="img/mushroom.jpeg" width="100" height="100" alt="mushroom"></label>

			<label><input type="checkbox" id="t7" name="t[]"><img src="img/onion.jpeg" width="100" height="100" alt="onion"></label>

			<label><input type="checkbox" id="t8" name="t[]"><img src="img/bellpepper.jpeg" width="100" height="100" alt="bellpepper"></label>

			<label><input type="checkbox" id="t9" name="t[]"><img src="img/olive.jpeg" width="100" height="100" alt="olive"></label>

			<label><input type="checkbox" id="t10" name="t[]"><img src="img/pineapple.jpeg" width="100" height="100" alt="pineapple"></label>

			<h4>Additional Instructions</h4>

			<textarea name="instructions" rows="10" cols="60" placeholder="cooking intructions and delivery instructions go here :)"></textarea>


			<p>

				<center><button type="submit"><a href="registration.php">Submit my order!</a></button></center>

			</p>

		</form>

	</center>



		

			

</body>








</html>
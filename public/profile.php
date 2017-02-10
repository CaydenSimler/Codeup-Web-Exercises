<?php
	var_dump($_GET);
	var_dump($_POST);
?>


<!DOCTYPE html>

<html>


<head>
	
	<title>User Registration Profile</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

</head>


<body>

		<center><h1>You're done! Your pizza is in the oven now and will be delivered in approximately ~ hours (it's not real, you're not getting a pizza)! To finish, please create a user profile to make ordering next time much faster! This will allow you to save your recent orders and, after a short time of ~, you will recieve 0 free pizzas!</h1></center>

			<form action="profile.php">
				
				<p>
					<label for="first_name"></label>
					<input type="text" name="first_name" id="first_name" placeholder="First Name">
				</p>

				<p>
					<label for="last_name"></label>
					<input type="text" name="last_name" id="last_name" placeholder="Last Name">
				</p>

				<p>
					<label for="email"></label>
					<input type="text" name="email" id="email" placeholder="Email Address">
				</p>

				<p>
					<label for="username"></label>
					<input type="text" name="username" id="username" placeholder="Username">
				</p>

				<p>
					<label for="password"></label>
					<input type="password" name="password" id="password" placeholder="Password">
				</p>

				<p>
					<label for="confirm_password"></label>
					<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
				</p>

				<label>
					<input type="radio" name="mailing_list" value="mailing_list" checked>Add me to the mailing list!
				</label>

			
			<p>
				<button type="submit">Submit!</button>
			</p>

			</form>




</body>






</html>
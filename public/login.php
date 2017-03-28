<?php  

session_start();


// if the user is already logged in, redirect to the authorized.php page. checks both the status of the $_SESSION array and what is inside of it
if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] === 'admin') {
	header('Location: authorized.php');
	exit;
}


// header message displayed on the top of the page. will change if username or password is incorrect
$message = "Please sign in to view content";



//
if (isset($_POST['username']) && isset($_POST['password'])) {
	// sets the username and password using input from the form. also a trim added to remove spaces or tabs
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);


	// if the username AND password are correct
	if ($username === "admin" && $password === "password") {
		// adds a new item into the array of $_SESSION that way it can be tracked server wide, in order to be used on the authorized page
		$_SESSION['logged_in_user'] = $username;
		header('Location: authorized.php');
		exit;
	// if the username OR the password are incorrect
	} else if ($username !== "admin" || $password !== "password") {
		// changes the header message to give the user indication that input was incorrect
		$message = "invalid username or password";

	}
}


// an array of random colors
$randomColor = ['#42829E', '#BEB2C8', '#F27A6A', '#F9CD52', '#C2EFEB', '#7364AD', '#ECFEE8', '#90A351', '#E26158', '#CDD6D0'];

// a random number generator
$randomNumber = mt_rand(0, 9);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet">
	<style type="text/css">

		body {
			background-color: #363638;
			font-family: 'Slackey', cursive;
		}

		h1 {
			text-align: center;
			font-size: 2vw;
			color: #363638;
		}

		.signIn {
			color: #363638;
			font-size: 3vw;
		}

		.signInBar {
			background-color: <?php echo $randomColor[$randomNumber] ?>;
		}
		
		button {
			background-color: #363638;
			border: 0px solid black;
			outline: none;
			height: 30px;
			color: <?php echo $randomColor[$randomNumber] ?>;
		}

		input {
			background-color: #363638;
			border: 0px solid black;
			color: <?php echo $randomColor[$randomNumber] ?>;
			outline: none;
			height: 30px;
		}

		::-webkit-input-placeholder {
    		color: <?php echo $randomColor[$randomNumber] ?>;
		}

		hr {
			border: 2px solid #363638;
		}

		.header {
			text-align: center;
			color: <?php echo $randomColor[$randomNumber] ?>;
			font-size: 5vw;
		}



	</style>
</head>
<body>

	<div class="row signInBar">
		<div class="col-xs-12 invisible">lorem</div>	
		<form action="" method="POST">

			<div class="col-xs-12">
				<div class="col-xs-2">
					<input type="username" name="username" id="username" placeholder=" Username" required>
				</div>
				<div class="col-xs-2">
					<input type="password" name="password" id="password" placeholder=" Password" required>
				</div>
				<div class="col-xs-3">
					<button type="submit">Sign-In</button>
				</div>
			</div>

		</form>
		<div class="col-xs-12 invisible">lorem</div>	
	</div>

	<div class="row header"><?= $message ?></div>

	




	<script src="https://use.fontawesome.com/788edc112b.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>




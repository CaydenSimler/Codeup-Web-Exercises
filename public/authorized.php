<?php 


session_start();
require ('functions.php');

// checks whether the $_SESSION array contains the variable 'logged_in_user' and checks whether the logged in user variable has the right content. if either return true, then it pushes the user back to the login page so they cannot access the authorized page
if(!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user'] !== 'admin') {
	header('Location: login.php');
	exit;
} 

// checks the URL for ?logout=1. assigned when the user clicks a link and adds the ?logout=1 to the url which will then cause this if statement to return as true. clears the $_SESSION array and takes the user to the login page.
if(inputGet('logout') && inputGet('logout') == 1) {
	clearSession();
	header('Location: login.php');
	exit;
}

$username = $_SESSION['logged_in_user'];


// function for clearing the $_SESSION array
function clearSession() {
    session_unset();
    session_destroy();
    session_regenerate_id();
    session_start();
}

// an array of random colors
$randomColor = ['#42829E', '#BEB2C8', '#F27A6A', '#F9CD52', '#C2EFEB', '#7364AD', '#ECFEE8', '#90A351', '#E26158', '#CDD6D0'];

// a random number generator
$randomNumber = mt_rand(0, 9);


?>



<!DOCTYPE html>
<html>
<head>
	<title>Profile: <?= $username ?></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Google Font Link -->
	<link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet">

	<style type="text/css">
		body {
			background-color: #363638;
			font-family: 'Slackey', cursive;
		}

		h1.primary {
			color: <?php echo $randomColor[$randomNumber] ?>;
			text-align: center;
			font-size: 8vw;
		}

		a:link {
			color: #363638;
			text-decoration: none;
		}

		a:visited {
			color: #363638;		
		}

		a:hover {
			color: white;
			text-decoration: none;
		}

		a:active {
			color: #363638;
		}

		.link {
			font-size: 1.3vw;
			text-align: center;
		}

		.signInBar {
			background-color: <?php echo $randomColor[$randomNumber] ?>;
			font-size: 1.3vw;
		}

		.invisible {
			font-size: 80%;
		}

		.welcomeText {
			text-align: left;
		}

		.headerText {
			font-size: 5vw;
			color: <?php echo $randomColor[$randomNumber] ?>;
			text-align: center;
		}

	</style>

</head>
<body>
	<div class="row signInBar">
		<div class="col-xs-12 invisible">lorem</div>

		<div class="col-xs-offset-1 col-xs-2 welcomeText">Welcome, <?= $username ?>!</div>
		<div class="col-xs-offset-7 col-xs-2 link">
			<a href="authorized.php?logout=1">Sign-Out</a>
		</div>

		<div class="col-xs-12 invisible">lorem</div>
	</div>

	<div class="row headerText">
		<div class="col-xs-12">Welcome to your personal site, <?= $username; ?>!</div>	
	</div>


	<script src="https://use.fontawesome.com/788edc112b.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>
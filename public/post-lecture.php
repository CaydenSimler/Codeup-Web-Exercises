<?php  

// GET v POST

// GET (download):
// 	showing individual pages or resources
// 	sarching or search results
// 	bookmark a get request
// 	create an anchor tag that goes to the same location
// 	can be made into a link
// 	key=value pairs exist and are communicated in the URL
// POST (upload or trying to change data on the server):
// 	registering
// 	logging in
// 	sending data
// 	anything where you're trying to update or change data on the server
// 	key=value pairs are containted in the HTTP header

if (isset($_POST['username'])) {
	$username = $_POST['username'];

	if ($username == "guest" && $password == "password") {
		header('Location: authorized.php');
	}
} else {
	$username = "Guest";
}



?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Hello <?= $username ?>!</h1>

<form action="post-lecture.php" method="POST">
	<label for="username">username:</label>
	<input type="username" name="username" id="username">

	<label for="password">password:</label>
	<input type="password" name="password" id="password">

	<button type="submit">login</button>

</form>

</body>
</html>




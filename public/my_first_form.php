<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>

<html>
	
	<head>

		<title>Forms</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

	<body>
		

<!-- Form's action is where the request goes -->


		<h1>Search Bars</h1>

	<details>

		<h1>Youtube Search</h1>

			<form action="http://www.youtube.com/results" method="GET">
				
				<p>
					<label for="search_query">Search</label>
					<input type="text" id="search_query" name="search_query">
				</p>

				<button type="submit">Submit</button>

			</form>


		<h1>Reddit Search</h1>

			<form action="http://www.reddit.com/search" method="GET">
				
				<p>
					<label for="q">Search</label>
					<input type="text" id="q" name="q">
				</p>

				<button type="submit">Submit</button>

			</form>


		<h1>Facebook Search</h1>

			<form action="http://www.facebook.com/search/top/" method="GET">
				
				<p>
					<label for="q">Search</label>
					<input type="text" id="q" name="q">
				</p>

				<button type="submit">Submit</button>

			</form>

		<h1>Google Search</h1>

			<form action="http://www.google.com/search" method="GET">
				
				<p>
					<label for="q">Search</label>
					<input type="text" id="q" name="q">
				</p>

				<button type="submit">Submit</button>

			</form>

	</details>

		<h1>User Login</h1>

			<form action="my_first_form.php" method="POST">
				
				<p>
					<label for="username">Username</label>
					<input type="text" id="username" name="username" autofocus placeholder="input your username">
				</p>

				<p>
					<label for="password">Password</label>
					<input type="text" id="password" name="password" placeholder="input your password">
				</p>

				<button type="submit">Go</button>


		<h1>Send an Email</h1>
				
			<form action="my_first_form.php" method="POST">

				<p>
					<label for="to"></label>
					<input type="text" id="to" name="to" placeholder="To">
				</p>

				<p>
					<label for="form"></label>
					<input type="text" id="from" name="from" placeholder="From">
				</p>

				<p>
					<label for="subject"></label>
					<input type="text" id="subject"	name="subject" placeholder="Subject">
				</p>

				<p>
					<label for="email_body"></label>
					<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Compose your email here" placeholder="cooking intructions and delivery instructions go here :)"></textarea>
				</p>

					<button type="submit">Send</button>

			</form>


	</body>



</html>
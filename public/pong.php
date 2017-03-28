<?php

	require('ping-pong-controller.php');




?>


<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Google Font Link -->
	<link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet">

	<style type="text/css">
		body {
			background-color: #383836;
		}

		.text {
			font-family: 'Slackey', cursive;
			font-size: 10vw;
			color: #B5B5BC;
		}

		.textLeft {
			text-align: left;
		}

		.textRight {
			text-align: right;
		}

		.textCenter {
			text-align: center;
		}

		a:link.hit {
			color: #4287A5;
		}

		a:visited.hit {
			color: #4287A5;		
		}

		a:hover.hit {
			color: #B5B5BC;
			text-decoration: none;
		}

		a:active.hit {
			color: #4287A5;
		}

		a:link.miss {
			color: #B73535;
		}

		a:visited.miss {
			color: #B73535;
		}

		a:hover.miss {
			color: #B5B5BC;
			text-decoration: none;
		}

		a:active.miss {
			color: #B73535;		
		}
		

	</style>

</head>
<body>

	<div class="row">
		<div class="col-xs-12">
			<div class="text textLeft">
				<a href="" class="miss">MISS</a>
			</div>
			
			<div class="text textCenter">OR</div>
			
			<div class="text textRight">
				<a href="" class="hit">HIT</a>
			</div>
		</div>
	</div>





<!-- Font Awesome Link -->
<script src="https://use.fontawesome.com/788edc112b.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
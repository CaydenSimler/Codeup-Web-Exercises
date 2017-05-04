<?php 





?>





<!DOCTYPE html>
<html>
<head>
	<title>Form Popup Test</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>
		
		.loginInput {
			width: 100%;
			text-align: center;
			padding-top: 3%;
			padding-bottom: 3%;
			margin-top: 7%;
			margin-bottom: 7%;
		}

		.loginBody {
			background-color: #383836;
			border-radius: 2%;
			position: fixed;
			top: 50%;
  			transform: translateY(-50%);
		}

		.loginButton {
			top: 20%;
			position: absolute;
		}

		.loginForm {
			margin-top: 8%;
			opacity: .98;
		}

		.blur {
			-webkit-filter: blur(1.5px);
			-moz-filter: blur(1.5px);
			-o-filter: blur(1.5px);
			-ms-filter: blur(1.5px);
			filter: blur(1.5px);
		}

		.page-bg {
			background: url('/img/forest.jpg');

			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			z-index: -1;
			background-size: cover;
		}

		.submitButton {
			text-align: center;
			padding-bottom: 7%;
		}

		.closeButton {
			text-align: right;
			color: white;
			padding: 5%;
		}

		.loginHeader {
			color: white;
			text-align: center;
			font-size: 1.5vw;
		}

		form {
			font-size: 1.5vw;
		}

		input.loginInput {
			background-color: #383836;
			border-bottom: .1vw solid white;
			border-top: none;
			border-left: none;
			border-right: none;
			color: white;
		}

		input.loginInput:focus {
			outline: none;
			border: .1vw solid white;
		}


	</style>

</head>
<body>

	

	<nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Project name</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li role="separator" class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="../navbar/">Default</a></li>
	            <li><a href="../navbar-static-top/">Static top</a></li>
	            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	</nav>

	




	<div class="allContent">

		<div class="page-bg"></div>

		<div class="loginButton">
			<button class="btn btn-default">
				Login
			</button>
		</div>


  	</div>
	
	<div class="loginForm" style="display: none;">
		<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 loginBody">\
			<form action="" method="POST">
				<div class="col-xs-12 closeButton">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
				<div class="col-xs-12 loginHeader">Have an account? Login here!</div>
				<div class="col-xs-12">
					<input type="text" name="username" id="username" placeholder="username" class="loginInput"> 
				</div>
				<div class="col-xs-12">
					<input type="text" name="password" id="password" placeholder="password" class="loginInput">
				</div>
				<div class="col-xs-12 submitButton">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>




	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/788edc112b.js"></script>

	<!-- jQuery Google CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script type="text/javascript">

	$(document).ready(function() {

		"use strict";

		$('.loginButton').click(function(){
			$('.loginForm').fadeToggle(500);

			$('.allContent').toggleClass('blur', 10000);
		});

		$('body > div.loginForm > div > form > div.col-xs-12.closeButton > i').click(function(){
			$('.loginForm').fadeToggle(500);

			$('.allContent').toggleClass('blur', 10000);
		});

	});


	





	</script>



</body>
</html>
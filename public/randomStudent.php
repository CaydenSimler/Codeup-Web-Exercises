<?php 

// TODO ------
// Step One: create user input to add or remove students
// Step Two: sort students by male or female (multi-dimensonal array???)(checkbox radio???)
// Step Three: add option to remove student from the array after they are picked. once array is empty, reset it back to full (user input form, reset array button???)
// Step Four: ???
// Profit


	function randomColor(){
		// color array with 10 colors
		$randomColor = ['#42829E', '#BEB2C8', '#F27A6A', '#F9CD52', '#C2EFEB', '#7364AD', '#ECFEE8', '#90A351', '#E26158', '#CDD6D0'];

		// generates a number to act as an index for the randomColor array
		$randomNumber = mt_rand(0, 9);

		$color = $randomColor[$randomNumber];

		return $color;
	}


	function randomStudent(){
		// array of all students currently in the class
		$students = ['Cayden', 'Josh S.', 'Val', 'Keri', 'Cameron', 'Philip', 'John W.', 'Josh W.', 'Jacob', 'Todd', 'Thomas', 'Matt', 'Sophie', 'Will', 'Conner', 'Travis', 'Jeran', 'John N.'];

		// generates a number to act as an index for the students array
		$randomNumber = mt_rand(0, 17);

		$student = $students[$randomNumber];

		return $student;
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Random Student Generator</title>

	<style type="text/css">
		body {
			background-color: #363638;
		}

		h1 {
			color: <?= randomColor() ?>;
			font-size: 6vw;
			text-align: center;
		}

		h1.student {
			font-size: 15vw;
		}

		hr {
			border: 2px solid <?= randomColor() ?>;
		}

	</style>
</head>
<body>

<h1>THE GENERATOR HAS CHOSEN: </h1>
<hr>
<h1 class="student"><?= randomStudent(); ?></h1>

</body>
</html>







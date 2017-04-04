
<?php
// ------------------
// JAVASCRIPT OBJECTS
// ------------------
// var car = {
// 	"miles": 50000,
// 	"make": "Kia",
// 	accelerate": function() {
// 		this.speed++;
// 		this.miles++;
// 	,
// 	"speed": 0


// console.log(car.miles)
// console.log(car.speed)
// car.accelerate()
// console.log(car.speed)
// console.log(car.miles)


// objects bundle together related behavior and data
// object behavior == functions == methods
// object's data == properties

	$car = new stdObject();

	$car->make = "Kia";
	$car->model = "Optima";

	echo $make // wouldn't work; make is undefined

// Object Oriented Programming
	// represent real physical processes in software
	// world != "strings", true, null
	// in PHP, object is a data type
	// each object is a type of class

// Classes are blueprints for objects in PHP

// function definitions are to classes
	// as function calls are to objects


	function add($a, $b) {
		return $a + $b;
	}

	add(1, 2);

	// classes define properties and methods
	// think of objects as the 'return value' of classes

public class User() { // parenthesis are a way of passing values into a class
	$username = "admin";
	$password = "password";

	function isAdmin() {
		if($this->username == "admin") {
			return true;
		} else {
			return false;
		}
	} 

	function attemptLogin($username, $password) { 
		if($this->username == $username && $this->password == $password) {
			return true;
		} else {
			return false;
		}
	}

	

}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>



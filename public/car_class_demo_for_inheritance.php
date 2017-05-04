<?php 

// Best Practices:
	// Each class should have its own file, where the file name is the same as the class name
	// Automobile.php, Car.php, Truck.php
	// Classes/Objects are a way of organizing functionality 



class Vehicle {
	public $vehicleName;
}

class Automobile extends Vehicle {
	public $engineType = 'gasoline';
	public $speed = 0;

	public function accelerate() {
		$this->speed++;
	}

	public function speed() {
		return $this->speed;
	}
	
}

class Car extends Automobile {
}

class Truck extends Automobile {

	public function canIBorrowYourTruck(){
		$random = rand(0, 1);

		if ($random === 1) {
			$answer = 'yes';
		} else {
			$answer = 'no';
		}

		return $answer;
	}
}


$car = new Car();
$car->engineType = 'diesel';
echo 'Current speed is: ' . $car->speed() . PHP_EOL;
$car->accelerate();
$car->accelerate();
$car->accelerate();
$car->accelerate();
echo 'Current speed is: ' . $car->speed() . PHP_EOL;

$truck = new Truck();
echo $truck->canIBorrowYourTruck() . PHP_EOL;




?>
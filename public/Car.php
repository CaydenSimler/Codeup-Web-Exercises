<?php 

class Car {

	public $make;
	public $model;
	public $speed;


	public function accelerate() {
		$this->speed += 1;
	}

	public function break() {
		$this->speed = 0;
	}
}



class RaceCar extends Car {

	public function accelerate() {
		$this->speed += 200;
	}

}




?>
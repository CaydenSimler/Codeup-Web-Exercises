<?php 	

require_once 'Person.php';


class SuperHero extends Person {
	public $hasPowers = true;
	public $alterEgo;
	public $capeColor;

	public function __construct($name, $lastName, $alterEgo) {
		parent::__construct($name, $lastName);
		$this->alterEgo = $alterEgo;
	}

	public function fullName() {
		return $this->alterEgo;
	}

	public function alterEgo() {
		return $this->name . ' ' . $this->lastName;
	}

	public function hasCape() {
		return !empty($this->capeColor);
	}
}



?>
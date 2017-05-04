<?php 



class Person {

	public $hasPowers = false;
	public $name;
	public $languages;
	public $lastName;

	public function __construct($name, $lastName) {
		$this->name = $name;
		$this->lastName = $lastName;
	}

	public function fullName() {
		return $this->name . ' ' . $this->lastName;
	}
}

// $person = new Person('Cayden', 'Simler'); // Enforce rules when you construct an object




/*
JAVASCRIPT
var person = {
	name: '',
	languages: ['php', 'css', 'js']
}

var ryan = Object.create(person);
ryan.name = 'Ryan';
ryan.languages = ['php', 'js', 'clojure'];
*/


?>
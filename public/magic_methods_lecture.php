<?php 


class Model {


	public function __get($name) {
		return $this->$name;
	}

	public function __set($name, $value) {

		$this->$name = $value;

	}


}


class Student {

	protected $name;
	protected $cohort;
	protected $languages = [];


}


class User extends Model {

	protected $username;
	protected $password;

}

$cayden = new User();
$cayden->username = 'Cayden'; // same as $cayden->__set('username', 'Cayden'); 
echo $cayden->username . PHP_EOL; // same as $cayden->username = 'Cayden';




?>
<?php 

	require_once('User.php');

	$admin = new User(); // new is required and means to create a new object
	$admin->username = "admin";
	$admin->password = "supersecure";

	$guest = new User();

	$guest->username = "roger";
	$guest->password = "ilovethegoldengirls";

	if ($guest->isAdmin()) {
		echo "Your guest can edit stuff." . PHP_EOL;
	} else {
		echo "The guest can't edit stuff." . PHP_EOL;
	}

	if ($admin->isAdmin()) {
		echo "The admin can edit stuff." . PHP_EOL;
	}

	require_once('Person.php');

	$bob = new Person();
	$bob->firstName = "Bob";
	$bob->lastName = "Bobberson";

	$bob->addFruit("pineapple");
	$bob->addFruit("banana");


	var_dump($bob);
	var_dump($admin);

	echo $bob->firstName . " is a " . gettype($bob) . PHP_EOL;

	echo $admin->username . " is a " . gettype($admin) . PHP_EOL;

	echo $bob->fruit[1] . PHP_EOL;

	foreach ($bob->fruit as $fruit) {
		echo $fruit . PHP_EOL;
	}



?>
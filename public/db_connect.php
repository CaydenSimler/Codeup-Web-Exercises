<?php 
// mysql -u vagrant -p
// DSN - Data Source Name
	// 1. Driver: mysql
	// 2. Host: 127.0.0.1 or localhost
	// 3. Database Name: employees
	// 4. Username: vagrant
	// 5. Password: vagrant
// $connection = new PDO('driver:host=hostvalue(127.0.0.1 or localhost);dbname(database name)=database', 'username', 'vagrant');

$connection = new PDO(
	'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, 
	DB_USER, 
	DB_PASS
);





?>
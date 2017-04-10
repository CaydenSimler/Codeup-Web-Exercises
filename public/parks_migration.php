<?php 

define("DB_HOST", "localhost");
define("DB_NAME", "parks_db");
define("DB_USER", "parks_user");
define("DB_PASS", "password");


require ('db_connect.php');
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$dropTable = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($dropTable);


$createTable = 
	'CREATE TABLE national_parks (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(240) NOT NULL,
		location VARCHAR(120),
		date_established DATE,
		area_in_acres DOUBLE,
		PRIMARY KEY (id),
		UNIQUE (name)
	)';

$dbc->exec($createTable);


?>
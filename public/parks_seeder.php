<?php 		

// $employees = [
// 	[
// 		'emp_no' => 10001,
// 		'birth_date' => '1953-09-02',
// 		'first_name' => 'Georgi',
// 		'last_name' => 'Facello',
// 		'gender' => 'M',
// 		'hire_date' => '1986-06-26'
// 	],
// 	[
// 		'emp_no' => 10002,
// 		'birth_date' => '1964-06-02',
// 		'first_name' => 'Bazalel',
// 		'last_name' => 'Simmel',
// 		'gender' => 'F',
// 		'hire_date' => '1985-11-21'
// 	]
// ];

// foreach ($employees as $index) {
// 	foreach ($index as $key => $value) {
// 		echo $value . PHP_EOL;
// 	}

// 	echo " " . PHP_EOL;
// }


define("DB_HOST", "localhost");
define("DB_NAME", "parks_db");
define("DB_USER", "parks_user");
define("DB_PASS", "password");


require ('db_connect.php');
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$truncate = 'TRUNCATE national_parks';

$dbc->exec($truncate);

$nationalParksInformation = [
	[
		'name' => 'Great Smoky Mountains',
		'location' => 'North Carolina',
		'date_established' => '1934-06-15',
		'area_in_acres' => 522427
	],
	[
		'name' => 'Grand Canyon',
		'location' => 'Arizona',
		'date_established' => '1919-02-26',
		'area_in_acres' => 1217262
	],
	[
		'name' => 'Yosemite',
		'location' => 'California',
		'date_established' => '1890-10-01',
		'area_in_acres' => 761266
	],
	[
		'name' => 'Rocky Mountains',
		'location' => 'Colorado',
		'date_established' => '1915-01-26',
		'area_in_acres' => 265769
	],
	[
		'name' => 'Zion',
		'location' => 'Utah',
		'date_established' => '1919-11-19',
		'area_in_acres' => 146597
	],
	[
		'name' => 'Yellowstone',
		'location' => 'Wyoming',
		'date_established' => '1872-03-01',
		'area_in_acres' => 2219789
	],
	[
		'name' => 'Olympic',
		'location' => 'Washington',
		'date_established' => '1938-06-29',
		'area_in_acres' => 922000
	],
	[
		'name' => 'Acadia',
		'location' => 'Maine',
		'date_established' => '1916-07-08',
		'area_in_acres' => 49052
	],
	[
		'name' => 'Grand Teton',
		'location' => 'Wyoming',
		'date_established' => '1929-02-26',
		'area_in_acres' => 310000
	],
	[
		'name' => 'Glacier',
		'location' => 'Montana',
		'date_established' => '1910-05-11',
		'area_in_acres' => 1000000
	]

];

foreach ($nationalParksInformation as $index) {
    $insert = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$index['name']}', '{$index['location']}', '{$index['date_established']}', {$index['area_in_acres']})";

    $dbc->exec($insert);
}













?>
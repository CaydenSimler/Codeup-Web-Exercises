<?php 		

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
		'area_in_acres' => 522427,
		'description' => 'The Great Smoky Mountains are a mountain range rising along the Tennessee–North Carolina border in the southeastern United States. They are a subrange of the Appalachian Mountains, and form part of the Blue Ridge Physiographic Province.'
	],
	[
		'name' => 'Grand Canyon',
		'location' => 'Arizona',
		'date_established' => '1919-02-26',
		'area_in_acres' => 1217262,
		'description' => 'Carved out by the Colorado River, the Grand Canyon (nearly 1,500 m deep) is the most spectacular gorge in the world.'
	],
	[
		'name' => 'Yosemite',
		'location' => 'California',
		'date_established' => '1890-10-01',
		'area_in_acres' => 761266,
		'description' => 'Yosemite National Park is located in the central Sierra Nevada of California. Three wilderness areas are adjacent to Yosemite: the Ansel Adams Wilderness to the southeast, the Hoover Wilderness to the northeast, and the Emigrant Wilderness to the north.'
	],
	[
		'name' => 'Rocky Mountains',
		'location' => 'Colorado',
		'date_established' => '1915-01-26',
		'area_in_acres' => 265769,
		'description' => 'The Rocky Mountains, commonly known as the Rockies, are a major mountain range in western North America. The Rocky Mountains stretch more than 3,000 miles (4,800 km) from the northernmost part of British Columbia, in western Canada, to New Mexico, in the Southwestern United States.'
	],
	[
		'name' => 'Zion',
		'location' => 'Utah',
		'date_established' => '1919-11-19',
		'area_in_acres' => 146597,
		'description' => 'Zion Canyon, is a deep chasm with nearly vertical walls. It was cut by the North Fork of the Virgin River, whose great erosive power is due to its gradient, or slope, which ranges between 50 and 80 feet per mile.'
	],
	[
		'name' => 'Yellowstone',
		'location' => 'Wyoming',
		'date_established' => '1872-03-01',
		'area_in_acres' => 2219789,
		'description' => 'Yellowstone National Park is famous for its geysers and hot springs. The park contains about half the worlds geysers. The worlds most famous geyser, the Old Faithful Geyser, is in Yellowstone National Park. It also is a home to grizzly bears, wolves, bison and elk.'
	],
	[
		'name' => 'Olympic',
		'location' => 'Washington',
		'date_established' => '1938-06-29',
		'area_in_acres' => 922000,
		'description' => 'Olympic National Park is a United States national park located in the state of Washington, on the Olympic Peninsula. The park has four basic regions: the Pacific coastline, alpine areas, the west side temperate rainforest and the forests of the drier east side.'
	],
	[
		'name' => 'Acadia',
		'location' => 'Maine',
		'date_established' => '1916-07-08',
		'area_in_acres' => 49052,
		'description' => 'It reserves much of Mount Desert Island, and associated smaller islands, off the Atlantic coast. Initially created as the Sieur de Monts National Monument in 1916, the park was renamed Lafayette National Park in 1919, and was given its current name of Acadia in 1929.'
	],
	[
		'name' => 'Grand Teton',
		'location' => 'Wyoming',
		'date_established' => '1929-02-26',
		'area_in_acres' => 310000,
		'description' => 'Grand Teton National Park is a United States National Park in northwestern Wyoming. At approximately 310,000 acres (480 sq mi; 130,000 ha; 1,300 km2), the park includes the major peaks of the 40-mile-long (64 km) Teton Range as well as most of the northern sections of the valley known as Jackson Hole.'
	],
	[
		'name' => 'Glacier',
		'location' => 'Montana',
		'date_established' => '1910-05-11',
		'area_in_acres' => 1000000,
		'description' => 'Glacier National Park is a national park located in the U.S. state of Montana, on the Canada–United States border with the Canadian provinces of Alberta and British Columbia.'
	]

];

foreach ($nationalParksInformation as $park) {
    $insert = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)";

    $stmt = $dbc->prepare($insert);

    $stmt->execute(array(':name' => $park['name'], ':location' => $park['location'], ':date_established' => $park['date_established'], ':area_in_acres' => $park['area_in_acres'], ':description' => $park['description']));
}













?>
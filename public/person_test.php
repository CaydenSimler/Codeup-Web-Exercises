<?php 

require_once 'Person.php';
require_once 'SuperHero.php';

$batman = new SuperHero('Bruce', 'Wayne', 'Batman');

echo $batman->fullName() . PHP_EOL;
echo $batman->alterEgo() . PHP_EOL;





?>
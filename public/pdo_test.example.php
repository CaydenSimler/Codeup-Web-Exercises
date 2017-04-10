<?php 


define("DB_HOST", "");
define("DB_NAME", "");
define("DB_USER", "");
define("DB_PASS", "");


require ('db_connect.php');
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS), PHP_EOL;



?>
<?php 
// This is the CONTROLLER

	require("controller-lecture.php");

?>

<!-- This is the VIEW -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h1><?= "$name $lname" ?></h1>
	<h1><?= "{$school['name']}: {$school['address']}" ?></h1>

	<ol>
		<?php foreach ($colors as $color): ?>
			<li><?= $color; ?></li>
		<?php endforeach; ?>
	</ol>
	

</body>
</html>
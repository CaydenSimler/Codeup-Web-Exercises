<?php 



function inputHas($key){

	$keyValue = (isset($_REQUEST[$key]));

	return $keyValue;

}

function inputGet($key) {

	if (inputHas($key)) {
		return $_REQUEST[$key];
	} else {
		return null;
	}

}


function escape($input) {

	return htmlspecialchars(strip_tags($input));

}







?>
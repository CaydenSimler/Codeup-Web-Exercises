<?php 

	function pageController(){
		$things = [];

		$things['favoriteThings'] = ['Food', 'Sleep', 'Family', 'Gaming', 'Travelling', 'Sleeping'];
		return $things;
	}

	extract(pageController());


?>
<?php  
	// Prepare the variables that we want to use in the view!
	function pageController() {
		$data = [];

		$data['name'] = "Cayden";
		$data['lname'] = "Simler";
		$data['school']['name'] = "Codeup";
		$data['school']['address'] = "600 Navarro Street";
		$data['colors'] = ['Blue', 'Green', 'Red'];

		// We always want to return the whole array
		return $data;
	}

	var_dump(pageController());

	extract(pageController());
?>
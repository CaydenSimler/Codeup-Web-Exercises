<?php 

// Create a file called counter.php using the page controller template.
// In your HTML, you will need two links. One that says up and another that says down.
// Add a heading that shows a number representing the current counter value. This value will start at zero. When up is clicked, the counter value should increase; when down is clicked, it should decrease.
// The up and down links will send GET requests back to the counter page itself.
// Create a function that will access the $_GET superglobal variable. It should determine what the new counter value is and return it.
// Use the extract() function to change the return value of the pageController() into variables for your HTML.

function counter() {
	$data = [];

	if(isset($_GET['counter'])) {
       $data['counter'] = $_GET['counter'];
	}
	else {
       $data['counter'] = 0;
	}

	if(isset($_GET['inc'])) {
       $data['inc'] = $_GET['inc'];
	} else {
       $data['inc'] = NULL;
	}
   
   	return $data;
}



?>

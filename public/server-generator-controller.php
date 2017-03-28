<?php

	function randomNumber(){
		$randomNumber = mt_rand(0, 29);

		return $randomNumber;
	}

	function pageController(){

		$array = [];

		$array['randomAdjective'] = ['Obedient', 'Cold', 'Pushy', 'Harsh', 'Prickly', 'Alcoholic', 'Bizarre', 'Purple', 'Attractive', 'Quirky', 'Spotty', 'Unsightly', 'Colorful', 'Materialistic', 'Painful', 'Special', 'Elderly', 'Tacit', 'Vulgar', 'Mature', 'Large', 'Curly', 'Gaping', 'Demonic', 'Magical', 'Tranquil', 'Raspy', 'Voiceless', 'Faded', 'Untidy'];
		$array['randomNoun'] = ['Snail', 'Airport', 'Afterthought', 'Car', 'Wax', 'Secretary', 'Party', 'Poison', 'Dog', 'Volleyball', 'Dirt', 'Leg', 'Oatmeal', 'Grandmother', 'Instrument', 'Island', 'Oven', 'Ticket', 'Border', 'Powder', 'Grandfather', 'Theory', 'Milk', 'Toe', 'Addiction', 'Stone', 'Science', 'Canvas', 'Stick', 'Cracker'];
		$array['randomColor'] = ['#0B4F6C','#5D5E60','#BEB2C8','#8D8D92','#C1ABA6','#533B4D','#F564A9','#FAA4BD','#FAE3C6','#E1BB80','#806443','#BD9391','#ADBABD','#91B7C7','#6EB4D1','#6CBEED','#294936','#AEF6C7','#E6B89C','#D8CFAF','#32533D','#F374AE','#D0CFEC','#C6AE82','#6A8E7F','#B098A4','#DBD9DB','#E5EBEA','#9D44B5','#B5446E'];
		$array['randomNumber'] = randomNumber();

		return $array;
	}

	extract(pageController());

?>
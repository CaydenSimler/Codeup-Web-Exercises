"use strict";

var x = 1;

while (x < 65536) {
	x = x * 2;
	console.log(x)
}


var allCones = Math.floor(Math.random() * 50) + 50;


do {
	var cones = Math.floor(Math.random() * 5) + 1;
	if (allCones >= cones) {
		allCones = allCones - cones;
		console.log("Sold " + cones + " cones. " + allCones + " cones remaining.");
	} else {
		console.log("Cannot sell you " + cones + " cones. I only have " + allCones + " cones remaining.")
	}
} while (allCones > 0);

console.log("Yay! I sold them all!")



var randomNumber = Math.floor(Math.random() * 50) + 50;

if (randomNumber % 0) {
	console.log(randomNumber);
} else {
	randomNumber = randomNumber - 1;
	console.log(randomNumber);
}


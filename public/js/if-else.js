"use strict";

var gradeAverage = (70 + 80 + 95)/3;
var awesome = "You're awesome!";
var notawesome = "You need to practice more.";

if (gradeAverage > 80) {
	console.log(awesome);
} else {
	console.log(notawesome);
}



var cameronSpent = 180;
var ryanSpent = 250;
var georgeSpent = 320;


if (cameronSpent > 200) {
	var cameronDiscount = cameronSpent - (cameronSpent * .35);
	console.log("Cameron's total was $180 before the discount, but after the discount was applied, he spent $" + cameronDiscount + ".");
} else {
	console.log("Cameron's total was $" + cameronSpent + " and no discount was applied.");
}


if (ryanSpent > 200) {
	var ryanDiscount = ryanSpent - (ryanSpent * .35);
	console.log("Ryan's total was $250 before the discount, but after the discount was applied, he spent $" + ryanDiscount + ".");
} else {
	console.log("Ryan's total was $" + ryanSpent + " and no discount was applied.");
}


if (georgeSpent > 200) {
	var georgeDiscount = georgeSpent - (georgeSpent * .35);
	console.log("George's total was $320 before the discount, but after the discount was applied, he spent $" + georgeDiscount + ".");
} else {
	console.log("George's total was $" + georgeSpent + " and no discount was applied.");
}



var flipACoin = Math.floor(Math.random()* 2)
var buyACar = "Isaac should buy a car";
var buyAHouse = "Isaac should buy a house";


if (flipACoin == 0) {
	console.log(buyACar);
} else {
	console.log(buyAHouse);
}



var whatToBuy = (flipACoin == 0) ? "Isaac should buy a car." : "Isaac should buy a house.";
	console.log(whatToBuy);



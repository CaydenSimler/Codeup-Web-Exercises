"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

// TODO: Show an alert message that welcomes the user based on their input.

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.


var total;

function getName() {
	var name = prompt("New phone, who dis???");

	if (name == "") {
		return getName();
	} else {
		return name;
	}

}

var name = getName();

alert("Welcome to the site " + name + "!")


// var nameAnswer = prompt("Who you is???");

// while (nameAnswer == "") {
// 	alert("I can literally do this forever!");
// 	nameAnswer = prompt("Who you is???");
// } 

// alert("Welcome to the site " + nameAnswer + "!");


// var pizzaAnswer;

// var pizzaAnswer = prompt("Do you like pizza? yes or no");

// if (pizzaAnswer == "yes") {
// 	alert("You and me both!");
// } else {
// 	alert("You make me sick! Have fun in your infinite loop!");

// 	while (pizzaAnswer == "no") {
// 	prompt("Do you like pizza? yes or yes");
// 	}
// }

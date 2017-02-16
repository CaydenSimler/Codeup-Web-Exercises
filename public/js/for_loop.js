"use strict";


// Multiplier Exercise

var randomNumber = Math.floor(Math.random() * 11),
    value = 1,
    multi = 1;

console.log("The number being multiplied is " + randomNumber + ":");

for (multi; multi <= 10; multi++) {
    value = multi * randomNumber
    console.log(randomNumber + " x " + multi + " = " + value);
}



console.log("_______________________________")
// Decrease By Five Exercise

for (var i = 100; i >= 0; i = i - 5) {
    console.log(i);
}



console.log("_______________________________")
// // Number Triangle Exercise

for (var i = 1; i < 10; i++) {
    var numberToString = i + "";
    console.log(numberToString.repeat(i));
    if (i == 9) {
        console.log("0".repeat(10));
    }
}


console.log("_______________________________")
// Odd and Even Exercise



for (var i = 1; i <=10; i++) {
    var randomGen = Math.floor((Math.random() * (200 - 10 + 1)) + 20);
    if (random % 2 == 0) {
        console.log(random + " is even")
    }
}











"use strict";

var randomNumber = Math.floor((Math.random()*50)+1);

for (var i = 1; i <= 50; i++) {

    if (i === randomNumber) {
    	console.log(i + " is the number to skip")
    }
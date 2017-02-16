'use strict';

/*
 * How many times a lucky number is repeated for every 100 customers?
 */
var luckyNumber = Math.floor(Math.random()* 6),
	i = 1,
	defaultNumber = 100,
	number5 = 0,
	number4 = 0,
	number3 = 0,
	number2 = 0,
	number1 = 0,
	number0 = 0,
	appeared = " appeared ";

while (i < 100) {
	i++;
	luckyNumber = Math.floor(Math.random()* 6);
    switch (luckyNumber) {
    	case 0:
    		number0++;
    		console.log(luckyNumber + appeared + number0 + " times.");
    		break;
    	case 1:
    		number1++;
    		console.log(luckyNumber + appeared + number1 + " times.");
    		break;
    	case 2:
    		number2++;
    		console.log(luckyNumber + appeared + number2 + " times.");
    		break;
    	case 3:
    		number3++;
    		console.log(luckyNumber + appeared + number3 + " times.");
    		break;
    	case 4:
    		number4++;
    		console.log(luckyNumber + appeared + number4 + " times.");
    		break;
    	case 5:
    		number5++;
    		console.log(luckyNumber + appeared + number5 + " times.");
    		break; }
}




// The output should be something like

// 0 appeared 10 times
// 1 appeared 20 times
// 2 appeared 15 times
// 3 appeared 35 times
// 4 appeared 4 times
// 5 appeared 16 times

// The total should be 100
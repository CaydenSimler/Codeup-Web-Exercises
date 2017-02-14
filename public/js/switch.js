"use strict";

var luckyNumber = Math.floor(Math.random()* 6),
    number1 = .10,
    number2 = .25,
    number3 = .35,
    number4 = .5,
    number5 = 0,
    moneySpent = 60,    
    totalOwed = "Total Owed: $";

switch (luckyNumber) {
    case 1:
        var moneySpent = moneySpent - (moneySpent * number1);
        console.log(totalOwed + moneySpent);
        break;
    case 2:
        var moneySpent = moneySpent - (moneySpent * number2);
        console.log(totalOwed + moneySpent);
        break;
    case 3:
        var moneySpent = moneySpent - (moneySpent * number3);
        console.log(totalOwed + moneySpent);
        break;
    case 4:
        var moneySpent = moneySpent - (moneySpent * number4);
        console.log(totalOwed + moneySpent);
        break;
    case 5:
        var moneySpent = moneySpent * number5;
        console.log(totalOwed + moneySpent);
        break;
    default:
        console.log(totalOwed + moneySpent);
}



var month = Math.floor(Math.random()* 13)

switch (month) {
    case 1:
        console.log("January");
        break;
    case 2:
        console.log("February");
        break;
    case 3:
        console.log("March");
        break;
    case 4:
        console.log("April");
        break;
    case 5:
        console.log("May");
        break;
    case 6:
        console.log("June");
        break;
    case 7:
        console.log("July");
        break;
    case 8:
        console.log("August");
        break;
    case 9:
        console.log("September");
        break;
    case 10:
        console.log("October");
        break;
    case 11:
        console.log("November");
        break;
    case 12:
        console.log("December");
        break;
    default:
        console.log("Not a valid month.")
        break;
}





























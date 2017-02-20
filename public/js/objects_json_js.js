"use strict";

// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

var book = [
	{
		"title": "Harry Potter and The Order of the Phoenix",
		"author": {
			"firstName": "J.K.",
			"lastName": "Rowling"
		}
	},

	{
		"title": "Harry Potter and The Prisoner of Azkaban",
		"author": {
			"firstName": "J.K.",
			"lastName": "Rowling"
		}
	},

	{
		"title": "Cell",
		"author": {
			"firstName": "Stephen",
			"lastName": "King"
		}
	},

	{
		"title": "Dreamcatcher",
		"author": {
			"firstName": "Stephen",
			"lastName": "King"
		}
	},

	{
		"title": "The Life of Pi",
		"author": {
			"firstName": "Yann",
			"lastName": "Martel"
		}
	}
]



// log out the books array
console.log(book);

book.forEach(function (book, bookNumber) {

	console.log("Book #" + (bookNumber + 1));
    console.log("Title: " + book.title);
    console.log("Author: " + book.author.firstName + " " + book.author.lastName);
    console.log(" ");

});



// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
    // console.log("Book #" + todo);
    // console.log("Title: " + todo);
    // console.log("Author: " + todo);
    // console.log("---");
// end loop here
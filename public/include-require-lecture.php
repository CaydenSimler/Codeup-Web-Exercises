<?php 


// Definition: include and require are PHP statements that enable us to access code from other files and keep our code more modular and organized.


// Real World Example 1: MVC framework seperation (seperate files for the controllers, model classes, and view templates).


// Side Note: sometimes, you may see the string surrounded by perenthesis - matter of personal preference.


include "sample.file";

include ("sample.file");


// When to use Include vs Require
 
	// include bad file path will give warning, but it will still show the rest of the content.
	// use include if you have content that won't break the other items in your page


	// use require when you have certain functionality that is dependant on the file you are including


// using_once
	// you may accidentally include the same file more than once in a larger application. if the file being brought has variables and functions defined, you cannot redeclare the same function or varible (syntax error).




?>
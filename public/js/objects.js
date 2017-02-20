(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.

    var person = {} ;

    	person.firstName = "Cayden";
    	person.lastName = "Simler";
    	
    	person.sayHello = function() {
    		alert("Hi! My name is " + person.firstName + " " + person.lastName + ".");
    	}

    console.log(person);
    person.sayHello();


})();

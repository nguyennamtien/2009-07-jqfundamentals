/* logic */
var foo = true; 
var bar = false;

// lots of things are truthy: '0', 'any string', [] (an empty array), {} (an empty object), any non-zero number
// lots of things are falsy: 0, '' (empty string), NaN, null, undefined

var baz = foo || bar; // logical OR operator || returns the value of the first true comparator (false if none)
var bim = foo && bar; // logical AND operator && returns the value of the last true comparator (false if none)

if (foo) {
	// do something if foo is true
} else if (bar) {
	// do something if bar is true AND foo was false
} else {
	// do something if both foo and bar were false
}


/* strings and numbers */
var foo = '1' + 2; // '12'
var bar = 1 + 2; // 3


/* arrays */
var foo = ['apple', 'orange', 'banana'];
foo.length; // 3
foo[1]; // 'orange'

foo[5] = 'pear'; // assign an element to an index of the array
foo; // ['apple', 'orange', 'banana', undefined, undefined, 'pear']
foo.length; // 6 -- uh oh

var foo = ['apple', 'orange', 'banana'];
foo.push('pear'); // add to an array when last index is not known
foo.length; // 4 -- that's better
foo; // ['apple', 'orange', 'banana', 'pear']


/* objects */

var myObject = {
	'property' : 'value',
	'method' : function() {
		alert('hello');
	}
};

myObject.property; // 'value'
myObject.method(); // alerts 'hello'


var MyThing = function() {
	
	return this;
};


/* functions */

// defining a function
var myFunction = function() {
	// do stuff
};

// functions can be created and run without ever naming them
(function(arg) { alert(arg); })('hello'); // alerts 'hello'

// functions can receive 0 or more arguments;
// these arguments can be anything, including other functions!
var myFunction = function(a, b) {
	alert(a + ' ' + b);
};

var myFunction = function(fn) {
	fn(); fn(); 
};

myFunction(function() { alert('hello'); }); // alerts 'hello' twice

// functions can return things
var myFunction = function(a, b) {
	return a + ' ' + b;
};

// functions can even return other functions
var myFunction = function(a, b) {
	var foo = function() { 
		alert(a);
		alert(b);
	};
	return foo;
};

var f = myFunction('hello', 'world');
f(); // alerts 'hello', then alerts 'world'

// functions "close" their variables -- variables defined in a function
// are only available to other objects and functions created inside the function
var myFunction = function() {
	var myClosedVariable = 'hello';
};

alert(myClosedVariable); // error; myClosedVariable isn't defined outside the function 

var myFunction = function() {
	var myFn = function() {
		alert(myClosedVariable);
	};
	
	var myClosedVariable = 'hello';
	
	return myFn;
};

alert(myClosedVariable); // error; myClosedVariable isn't defined outside the function

var f = myFunction(); // returns the function created inside myFunction
f(); // this function still has access to myClosedVariable, because the function and the variable
	 // were created in the same scope. this is an example of a closure.
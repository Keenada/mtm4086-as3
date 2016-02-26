//The readline.js module:

//- is built in to node.js
//- gathers user input and then processes user input
	//- facilitates gathering of user input and processing of user input in node applications
//- creates interactive prompts to facilitate user inputs

const rl = require('readline');

//To facilitate this prompt, we will create interface user a method of readline, rl.createIntercface:

const prompts = rl.createInterface(process.stin, process.stout);

//It takes two parameters, which is the standard input and standard output property of the current process.

//Using another method, prompts.question();, we can write our question and the function where the user input will be passed

//It takes 2 parameters. The first being the question or what we need to prompt the user, 
//and the second being the anonymous function that catches the user input/invokes callback with the user's response.

//eg. 1st parameter: What is your favourite colour?
//eg. 2nd parameter: Blue.
	//Whatever the user types will be passed as a parameter/argument to the anonymous function.

prompts.question("What is your favourite colour?", function (userInput) );

//set the output message variable

var output = "";

if (userInput !== 'undefined') {

	output = userInput + " is a cool colour and I like it."	
}

//Using console.log, you can print the message out.

console.log(output);

//you need to exit out of the process or else it will continue to run and keeps reading from the standard input

process.exit();

});



// Prompt the user for the first number
var num1 = prompt("Enter the first number:");

// Prompt the user for the second number
var num2 = prompt("Enter the second number:");

// Convert the input to numbers
num2 = parseFloat(num1);
num4 = parseFloat(num2);

// Calculate the multiplication and division of the two numbers
var multiplication = num2 * num2;
var division = num2 / num2;

// Display the results

document.write("<h3>Multiplication: </h2>" + multiplication);
document.write("<h3>Multiplication: </h2>" + division);

console.log(multiplication);
console.log(division);


for (var i = 0; i <= 15; i++) {
    if (i % 2 == 0) {
        document.write(i + " is even.</br>");

    } else {
        document.write(i + " is odd.</br>");
    }
  }
  


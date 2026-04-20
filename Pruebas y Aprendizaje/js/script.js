function saludar() {
    alert("Holaaa!");
}

console.log("test");

let a = 10;
let b = 5;

console.log("Suma:", a + b);

let x= 6;

document.getElementById("demo").innerHTML = "The value of x is " + x;

document.getElementById("mensaje").innerHTML = "Hello Dolly.";

let carName = "Volvo";

document.getElementById("mensaje2").innerHTML = carName;

const price1 = 5;
const price2 = 6;
let total = price1 + price2;

document.getElementById("mensaje3").innerHTML = "The total is: " + total;

const pi = 3.14;
let person = "John Doe";
let answer = 'Yes I am!';

document.getElementById("mensaje4").innerHTML = pi + "<br>" + person + "<br>" + answer;

function myfunction() {
  var x = 1;
  let y = 2;
  const z = 3;
}

let x1 = "John Doe";

let xx = 0;

var y = "John Doe";

var yy = 0;

const PI = 3.14159265359;

const cars = ["Saab", "Volvo", "BMW"];

// Change an element:
cars[0] = "Toyota";

// Add an element:
cars.push("Audi");

// Display the Array:
document.getElementById("array").innerHTML = cars;
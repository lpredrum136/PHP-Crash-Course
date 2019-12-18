<?php
// FUNCTION - Block of code that can be repeatedly called

/*
Camel case: myFunction()
Lower case: my_function()
Pascal case: MyFunction()
*/

// Create simple function
function simpleFunction()
{
  echo 'Hello World';
}

// Run simple function
// simpleFunction();

// Function with params
function sayHello($name = 'World')
{
  echo "Hello $name<br>";
}

/* sayHello('Joe');
sayHello('Bob');
sayHello(); */

// Return value
function addNumbers($num1, $num2)
{
  return $num1 + $num2;
}

// echo addNumbers(2, 3);

// By Reference
$myNum = 10;
function addFive($num)
{
  $num += 5;
}

function addTen(&$num)
{
  $num += 10;
}

addFive($myNum);
echo "Value: $myNum<br>";
addTen($myNum);
echo "Value: $myNum<br>";

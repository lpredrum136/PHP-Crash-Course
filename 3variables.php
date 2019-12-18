<?php
// Single line comment
# Single line comment
/* Multiline 
comment */

// VARIABLES
/* 
- Prefix $
- Starts with letter or _
- Only letters, numbers and _
- Case sentitive
*/

// DATA TYPES
/*
- String
- Integers
- Floats
- Booleans
- Arrays
- Objects
- NULL
-Resource
*/

$output = 'Hello world';
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = 'hello';
$string2 = 'World';
$greeting = $string1 . ' ' . $string2 . '!';
$greeting2 = "$string1 $string2";

$string3 = "They\"re here";

$float1 = 4.4;
$bool1 = true;

define('GREETING', 'Hello everyone');

echo GREETING;

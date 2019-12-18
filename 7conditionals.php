<?php
// CONDITIONALS

/*
==
===
< > <= >= != !==
*/

/* $num = 6;

if ($num == 5) {
  echo '5 passed';
} else if ($num == 6) {
  echo '6 passed';
} else {
  echo 'did not pass';
} */

// NESTING IF

$num = 5;

/* if ($num > 4) {
  if ($num < 10) {
    echo "$num passed";
  }
} */

/*
LOGICAL OPERATORS
&&
||
xor
*/

/* if ($num > 4 || $num < 10) {
  echo "$num passed";
}
 */

// SWITCH
$favColor = 'blue';

switch ($favColor) {
  case 'red':
    echo 'Your favourite colour is red';
    break;
  case 'blue':
    echo 'Your favourite colour is blue';
    break;
  case 'green':
    echo 'Your favourite colour is green';
    break;
  default:
    echo 'Your favourite colour is something else';
}

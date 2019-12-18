<?php

// People array - Get from DB
$people[] = 'Steve';
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get query string
$q = $_REQUEST['q']; // $_GET['q'] is ok

$suggestion = '';

// Get suggestions
if ($q !== '') {
  $q = strtolower($q);
  $len = strlen($q);

  foreach ($people as $person) {
    if (stristr($q, substr($person, 0, $len))) {
      if ($suggestion == '') $suggestion = $person;
      else $suggestion .= ", $person";
    }
  }
}

echo $suggestion == '' ? 'No suggestion' : $suggestion;

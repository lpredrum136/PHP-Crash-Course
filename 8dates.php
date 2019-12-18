<?php
// echo date('d'); // Day
// echo date('m'); // Month
// echo date('Y'); // Year
// echo date('l'); // Day of the week

// echo date('d/m/Y');

/* echo date('h'); // Hour
echo date('i'); // Min
echo date('s'); // Sec
echo date('a'); // AM or PM */

// Set time zone
date_default_timezone_set('Australia/Brisbane');

// echo date('h:i:sa');


$timestamp = mktime(10, 14, 54, 9, 10, 1981);
// echo $timestamp;
// echo date('d/m/Y h:i:sa', $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2019');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Months');
// echo $timestamp2;

echo date('d/m/Y h:i:sa', $timestamp5);

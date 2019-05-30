<?php
date_default_timezone_set('America/Los_Angeles');

$today = date('l, F d, Y');
$today2 = getdate();

$birthdate = mktime(10, 53, 13, 2, 4, 1987);
$formatted_birthdate = date('l, F d, Y', $birthdate);
$timestamp = strtotime('this Saturday');

echo $formatted_birthdate;
echo "<br>";
echo $today;
echo "<br>";
echo date('l, F d, Y', $timestamp);
// var_dump($today2);

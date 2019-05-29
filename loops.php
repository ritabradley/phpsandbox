<?php

# Types of Loops
/*
    For
    While
    Do..While 
     Foreach
  */

// For loop

$people = ["Rita", "Isaiah", "Ron", "Evan"];

for ($i = 0; $i < count($people); $i++) {
  echo "$people[$i]";
  echo "<br>";
};


// While loop

$i = 1;

while ($i <= 10) {
  echo $i;
  echo "<br>";
  $i++;
}


// Do..while
$j = 0;
do {
  echo $j;
  echo "<br>";
  $j++;
} while ($j <= 10);

// Foreach

foreach ($people as $person) {
  echo $person;
  echo "<br>";
}

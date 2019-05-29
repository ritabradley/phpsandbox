<?php
$lucky_num = 7;
$random_num = rand(1, 10);

/*if ($lucky_num === $random_num) {
  echo "Lucky number matches random number!";
} else if ($lucky_num > $random_num) {
  echo "Lucky number is greater than the random number";
} else {
  echo "Lucky number is lower than random number.";
}
*/

echo "<br>";

// FizzBuzz

/* $range = range(1, 100);
foreach ($range as $num) {
  if ($num % 5 === 0 && $num % 3 === 0) {
    echo "$num FizzBuzz";
    echo "<br>";
  } elseif ($num % 3 === 0) {
    echo "$num Fizz";
    echo "<br>";
  } elseif ($num % 5 === 0) {
    echo "$num Buzz";
    echo "<br>";
  } else {
    echo $num;
    echo "<br>";
  }
} */


// Switch statement

$fav_color = "red";


switch ($fav_color) {
  case 'red':
    echo "your favorite color is red";
    break;
  case 'blue':
    echo "your favorite color is red";
    break;
  case 'green':
    echo "your favorite color is red";
    break;
  default:
    echo "your favorite color isn't listed";
    break;
}

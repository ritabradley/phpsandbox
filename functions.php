<?php

function simpleFunction()
{
  echo 'This is a function';
}


function sayHello($name, $time_of_day = "afternoon")
{
  echo "Hello $name! Have a great $time_of_day!";
}

function add($num1, $num2)
{
  return $num1 + $num2;
}

function addFive($num)
{
  return $num += 5;
}

function addTen(&$num)
{
  return $num += 10;
}

// simpleFunction();
// echo "<br>";
// sayHello('Rita');
// echo "<br>";
// echo add(4, 67);
// echo "<br>";
$my_num = 7;
echo "My number is: $my_num";
echo "<br>";
echo addFive($my_num);
echo "<br>";
echo "My number is now: $my_num";
echo "<br>";
echo addTen($my_num);
echo "<br>";
echo "My number is now: $my_num";

<?php

// basic data types in PHP

$name = 'Dairan'; // string
$age = 25; // integer
$money = 2400.50; // float or double
$is_married = true; // boolean
$children = null; // null

echo $name . "<br>";
echo $age . "<br>";
echo $money . "<br>";
echo $is_married . "<br>"; // (bool only shows 1 or nothing)
echo $is_married ? 'true' : 'false'; // ternary operator
echo $children . "<br>";

echo "<br>Showing different ways of printing variables: ";
echo "<br>One way of printing name: " . $name . "<br>";
echo "Another way of printing name: {$name} <br>";

echo "<br>Printing types using gettype() function: <br>";
echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($money) . "<br>";
echo gettype($is_married) . "<br>";
echo gettype($children) . "<br>";
echo "<br>";

echo var_dump($name) . "<br>";
echo var_dump($age) . "<br>";
echo var_dump($money) . "<br>";
echo var_dump($is_married) . "<br>";
echo var_dump($children) . "<br>";

echo "<br> Checking if variable is defined using isset() function: <br>";
echo var_dump(isset($name)) . "<br>"; // checks if variable is set
<?php

$normal_array = ["apple", "banana", "cherry"];

echo $normal_array[0]; // outputs "apple"

$normal_array[0] = "avocado";

echo "<br>";

echo $normal_array[0];

echo "<pre>";
echo var_dump($normal_array);

$different_types_array = [1, "two", 3.0, true];
echo var_dump($different_types_array);

$associative_array = [
    "first" => "fruit",
    "second" => 1,
    "third" => ["index1", "index2", 3]
];

echo "<br>";
echo var_dump($associative_array);
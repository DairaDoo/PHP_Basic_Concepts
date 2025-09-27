<?php


for ($i = 1; $i <= 5; $i++) {
    echo "Iteration number: {$i} <br>";
}

echo "<br>";

$i = 1;

while ($i <= 5) {
    echo "Iteration number: {$i} <br>";
    $i++;
}

echo "<br>";

$fruits = ["apple", "banana", "cherry"];

for ($i = 0; $i < count($fruits); $i++) {
    echo "Fruit name: {$fruits[$i]} <br>";
}

echo "<br>";

foreach ($fruits as $fruit) {
    echo "Fruit Name: {$fruit} <br>";
}
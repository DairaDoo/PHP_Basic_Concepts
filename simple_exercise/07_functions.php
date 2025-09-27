<?php

function say_hi() {
    echo "Hi!\n";
}

echo say_hi();

function add($a, $b) {
    return $a + $b;
}

echo add(1, 5);

echo "<br>";

function multiply($a, $b = 5) {
    return $a * $b;
}

$multiplication_result = multiply(3, 10);
echo $multiplication_result;
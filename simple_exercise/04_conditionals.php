<?php

$x = 3;
$y = 1;
$z = "1";

echo $x != $y;
echo $x == $z;
echo $x === $z;

echo "<br>";

if ($x < $y) {
    echo "x is less than y";
} else if($x > $y) {
    echo "x is greater than y";
} else {
    echo "x is equal to y";
}
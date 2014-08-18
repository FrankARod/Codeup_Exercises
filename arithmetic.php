<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
	echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
	echo $a % $b . PHP_EOL;
}

add(3, 5);
subtract(5, 4);
multiply(1, 7);
divide(6, 3);
modulus(6, 2);

?>
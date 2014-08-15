<?php

if ($argc == 3) {
	$max = $argv[2];
	$min = $argv[1];
} else {
	$max = 100;
	$min = 1;
}

for ($i = $min; $i <= $max; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz\n";
	} elseif ($i % 3 == 0) {
		echo "Fizz\n";
	} elseif ($i % 5 == 0) {
		echo "Buzz\n";
	} else {
		echo $i . "\n";
	}
}
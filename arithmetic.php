<?php

function verified($a, $b, $check_divide_by_zero = false) {
	if ($check_divide_by_zero) {
		if ($b == 0) {
			return false;
		} 
	}
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	} else {
		return false;
	}
}

function add($a, $b) {
	if (verified($a, $b)) {
		return $a + $b; 
	}
}

function subtract($a, $b) {
	if (verified($a, $b)) {
		return $a - $b;
	}
}

function multiply($a, $b) {
	if (verified($a, $b)) {
	   return $a * $b;
	}
}

function divide($a, $b) {
	if (verified($a, $b, true)) {
		return $a / $b;
	}
}

function modulus($a, $b) {
	if (verified($a, $b, true)) {
		return $a % $b;
	}
}

echo add(3, 'five') . PHP_EOL;
echo subtract(5, 'fore') . PHP_EOL;
echo multiply(1, '7') . PHP_EOL;
echo divide(6, 0) . PHP_EOL;
echo modulus(6, 2) . PHP_EOL;
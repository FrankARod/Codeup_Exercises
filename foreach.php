<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $type) {
	if (is_string($type)) {
		echo "{$type} is a string\n";
	} elseif (is_float($type)){
		echo "{$type} is a float\n";
	} elseif (is_bool($type)) {
		echo "{$type} is a boolean\n";
	} elseif (is_array($type)) {
		echo print_r($type) . " is an array\n";
	} elseif (is_null($type)) {
		echo "{$type} is null\n";
	} elseif (is_numeric($type)) {
		echo "{$type} is an integer\n";
	}
}
echo "\n";

foreach ($things as $type) {
	if (is_scalar($type)) {
		echo "{$type}\n";
	}	
}
echo "\n";

foreach ($things as $type) {
	if (is_numeric($type)) {
		echo "{$type}\n";
	} elseif (is_float($type)){
		echo "{$type}\n";
	} elseif (is_bool($type)) {
		echo "{$type}\n";
	} elseif (is_array($type)) {
		echo print_r($type) . "\n";
	} elseif (is_null($type)) {
		echo "{$type}\n";
	} else/* (is_string($type))*/ {
		echo "{$type}\n";
	}
}
echo "\n";
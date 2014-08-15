<?php

/*$numbers = array(1, 2, 3, 4, 5);

foreach ($numbers as $value) {
	echo "\$number has a value of {$value}\n";
}*/

/*$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $value) {
	$new_number = $value * 2;
	echo ("$value * 2 is {$new_number}\n");
}*/

/*$animal_types = array('dogs', 'cats', 'birds', 'narwhals');
foreach ($animal_types as $animal) {
	echo "Old McDonald's had a farm, and on that farm he raised some {$animal}\n";
}*/

/*$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
foreach ($data as $datum) {
    if (is_numeric($datum)) {
        echo "{$datum} is a number\n";
    } else if (is_string($datum)) {
        echo "{$datum} is a string\n";
    }
}*/

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
<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function is_empty($var) {
	if (isset($var)/* || empty($var)*/) {
		return '$var is SET' . PHP_EOL;
		// return true;
	} elseif (empty($var)) {
		return '$var is EMPTY' . PHP_EOL;
		// return false;
	}
}


// TEST: If var $nothing is set, display '$nothing is SET'

echo is_empty($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'


echo is_empty($something);

// Serialize the array $array, and output the results

$string_array = serialize($array);
echo $string_array . PHP_EOL;

// Unserialize the array $array, and output the results

$restored_array = unserialize($string_array);
echo var_dump($restored_array);
<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function result_found($query, $array) {
 	$result = array_search($query, $array);
 	if ($result === FALSE) {
 		return FALSE;
 	} else {
 		return TRUE;
 	}
 }

function values_in_common($array1, $array2) {
	$elements_in_common = 0;
	for ($i = 0; $i < count($array1); $i++) {
		if (result_found($array1[$i], $array2)) {
			$elements_in_common++;
		}
	}
	return $elements_in_common;	
}

var_dump(result_found('Tina', $names));
var_dump(result_found('Bob', $names));
echo values_in_common($names, $compare) . PHP_EOL;

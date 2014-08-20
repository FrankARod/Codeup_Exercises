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

var_dump(result_found('Tina', $names));
var_dump(result_found('Bob', $names));

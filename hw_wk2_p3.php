<?php

$cars = array(
    'Toyota Solara' => array(
        'year' => 2001,
        'doors' => 2,
        'color' => 'gray',
        'mileage' => 100000,
        'sunroof' => true,
        'convertable' => false,
        'license' => 'JSRULZ',
    ),

    'Honda Odyssey' => array(
        'year' => 2004, 
        'doors' => 4,
        'color' => 'marron',
        'mileage' => 60000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'ILUVPHP',
    ),

    'Cadillac Escalade' => array(
        'year' => 2014,
        'doors' => 4,
        'color' => 'white',
        'mileage' => 5000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'HTML5',
    ),

);

function list_cars($cars) {
	$output_string = "";
	foreach($cars as $model => $stats) {
		$output_string .= "I own a {$model}. Details below" . PHP_EOL . "-------------------------------" . PHP_EOL ."{$stats['doors']} Door {$stats['year']} {$model}" . PHP_EOL . "Color: {$stats['color']}" . PHP_EOL . "Mileage: {$stats['mileage']}" . PHP_EOL;
		if ($stats['sunroof']) {
			$output_string .= "Sunroof: Yes" . PHP_EOL;
		} else {
			$output_string .= "Sunroof: N/A" . PHP_EOL;
		}

		if ($stats['convertable']) {
			$output_string .= "Convertable: Yes" . PHP_EOL;
		} else {
			$output_string .= "Convertable: N/A" . PHP_EOL;
		}
		$output_string .= "License NO: {$stats['license']}" . PHP_EOL;
	}	
	return $output_string;
}

function get_input($single_letter = FALSE) {
   //returns single letter input for menus or full strings for any other application
   return ($single_letter ? substr(strtoupper(trim(fgets(STDIN))), 0, 1) : trim(fgets(STDIN)));  
}

function add_car($cars) {
	echo "Enter a car model." . PHP_EOL;
	$model = get_input();;
	echo "Enter the model year:" . PHP_EOL;
	$year = get_input();
	echo "How many doors?" . PHP_EOL;
	$doors = get_input();
	echo "Enter the color" . PHP_EOL;
	$color = get_input();
	echo "Enter the mileage" . PHP_EOL;
	$mileage = get_input();
	echo "Is there a sunroof?" . PHP_EOL;
	$sunroof = get_input();
	echo "Is it a convertable?" . PHP_EOL;
	$convertable = get_input();
	echo "Enter the license number" . PHP_EOL;
	$license = get_input();

	// $cars[] = $model;
	$cars[$model] = array('year' => $year,
					 'doors' => $doors,
					 'color' => $color,
					 'mileage' => $mileage,
					 'sunroof' => $sunroof,
					 'convertable' => $convertable,
					 'license' => $license,
	);
	var_dump($cars);
	return $cars;
}
$cars = add_car($cars);
echo list_cars($cars);

<?php

function area_of_circle($radius) {
	$area = pi() * ($radius * $radius);
	return $area;
}

function area_of_donut($donut_radius, $hole_radius) {
	$outer = area_of_circle($donut_radius);
	$inner = area_of_circle($hole_radius);
	$area =  $outer - $inner; 
	return $area;
}

echo area_of_donut(15, 5) . PHP_EOL;
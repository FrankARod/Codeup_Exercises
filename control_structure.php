<?php

// $movie = 'Kill Bill Volume 1';

// $age = 18;

// $has_a_parent = false;

// echo "You are $age years old.\n";

// // if ($age >= 18 || ($has_a_parent && $age > 13)) {
// // 	if ($age > 21) {
// // 		echo "Go to the Drafthouse and get a beer\n";
// // 	}
// // 	echo "You can watch $movie\n";
// // }

// // if ($age < 18) {
// // 	echo "You can't watch $movie\n";
// // }

// if ($age < 18) {
// 	echo "You can't watch $movie\n";
// }	else {
// 	echo "You can watch $movie\n";
// }

// if ($age >= 18) {
// 	echo "You can watch $movie\n";
// } elseif ($age >= 13) {
// 	echo "Maybe you should try The Avengers\n";
// }	else {
// 	echo "You should watch The Incredibes\n";
// }

$picked_movie = 'Kill Bill Volume 1';

// if (isset($picked_movie)) {
// 	$movie = $picked_movie;
// }	else {
// 		$movie = 'The Incredibles';
// }

$movie = isset($picked_movie) ? $picked_movie : 'The Incredibles';
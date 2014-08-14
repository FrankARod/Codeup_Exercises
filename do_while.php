<?php

// 	$increment = 0;

// do {
// 	echo $increment . "\n";
// 	$increment +=2;
// 	usleep(500000);
// } while ($increment <= 100);


// $increment = 100;

// do {
// 	echo $increment . "\n";
// 	$increment -= 5;
// }	while ($increment >= -10);

$increment = 2;

do {
	echo $increment . "\n";
	$increment *= $increment;
}	while($increment <= 1000000);
<?php

$increment = 2;

do {
	echo $increment . "\n";
	$increment *= $increment;
} while($increment <= 1000000);
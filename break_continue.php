<?php

for ($i = 1; $i <= 100; $i++) {
	echo $i . "\n";
	if($i % 2 != 0) {
		continue;
	}
	echo "^ That is an even number\n";
}
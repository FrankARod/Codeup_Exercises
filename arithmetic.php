<?php



function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	echo $a + $b . PHP_EOL;	
    } else {
    	echo "ERROR: Please enter only numeric arguments." . PHP_EOL;
    }
}

function subtract($a, $b) {
	 if (is_numeric($a) && is_numeric($b)){
    	echo $a - $b . PHP_EOL;
    } else {
    	echo "ERROR: Please enter only numeric arguments." . PHP_EOL;
    }

}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	echo $a * $b . PHP_EOL;
    } else {
    	echo "ERROR: Please enter only numeric arguments." . PHP_EOL;
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	if ($b == 0) {
    		echo "ERROR: Please don't divide by zero." . PHP_EOL;
    	} else {
    	echo $a / $b . PHP_EOL;
    	}
    } else {
    	echo "ERROR: Please enter only numeric arguments." . PHP_EOL;
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	if ($b == 0) {
    		echo "ERROR: Please don't divide by zero." . PHP_EOL;
    	} else {
    		echo $a % $b . PHP_EOL;
    	}	
    } else {
    	echo "ERROR: Please enter only numeric arguments." . PHP_EOL;
    }
}

add(3, 5);
subtract(5, 'fore');
multiply(1, '7');
divide(6, 0);
modulus(6, 2);

?>
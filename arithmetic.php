<?php

function verified($a, $b, $check_divide_by_zero = false) {
    if ($check_divide_by_zero) {
        if ($b == 0) {
            echo "ERROR: Please do not divide by zero. You entered $a and $b" . PHP_EOL;
            return false;
        } 
    }
    if (is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        echo "ERROR: Pleas enter only numeric values. You entered $a and $b" . PHP_EOL;
        return false;
    }

}


function add($a, $b){
    if (verified($a, $b)) {
     echo $a + $b . PHP_EOL; 
    }
}

function subtract($a, $b){
    if (verified($a, $b)){
        echo $a - $b . PHP_EOL;
    }
}

function multiply($a, $b){
    if (verified($a, $b)){
	   echo $a * $b . PHP_EOL;
    }
}

function divide($a, $b){
    if (verified($a, $b, true)){
    	echo $a / $b . PHP_EOL;
    }
}

function modulus($a, $b){
	if (verified($a, $b, true)){
        echo $a % $b . PHP_EOL;
    }
}

add(3, 'five');
subtract(5, 'fore');
multiply(1, '7');
divide(6, 0);
modulus(6, 2);
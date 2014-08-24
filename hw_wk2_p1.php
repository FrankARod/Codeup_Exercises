<?php

function days_of_month($month) {
	//convert month to timestamp
	//
	$time = strtotime($month);
	return date('t', $time);
}

$month = 'february';
$days = days_of_month($month);
echo "$month has $days days in it." . PHP_EOL;
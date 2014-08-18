<?php

//Set the default timezone
date_default_timezone_set('America/Chicago');

//Get Day of Week as number
//1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
	case 1:
		//output Monday
		echo 'Monday';
		break;
	case 2:
		//output Tuesday
		echo 'Tuesday';
		break;
	case 3:
		echo 'Wednesday';
		break;
	case 4:
		echo 'Thursday';
		break;
	case 5: 
		echo 'Friday';
		break;
	case 6:
		echo 'Saturday';
		break;
	case 7:
		echo 'Sunday';
		break;
	//etc through day 7
}

if($day_of_week == 1) {
	echo 'Monday';
} elseif($day_of_week == 2) {
	echo 'Tuesday';
} elseif($day_of_week == 3) {
	echo 'Wednesday';
} elseif($day_of_week == 4) {
	echo 'Thursday';
} elseif($day_of_week == 5) {
	echo 'Friday';
} elseif($day_of_week == 6) {
	echo 'Saturday';
} elseif($day_of_week == 7) {
	echo 'Sunday';
}
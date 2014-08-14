<?php

$hungry = TRUE;
$food_available = FALSE;
$have_money = TRUE;

if ($hungry && ($food_available || $have_money)) {
	echo 'We are fed and good to go.';
} else {
	echo 'Not hungy but thank you!';
}
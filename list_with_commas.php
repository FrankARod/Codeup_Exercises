<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($array, $alphabetical_sort = FALSE) {
	if ($alphabetical_sort) {
		sort($array);
	}
	$last_item = "and " . array_pop($array);
	array_push($array, $last_item);
	
	return implode(', ', $array);
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_array, true);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

?>
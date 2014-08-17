<?php 

$hank = ['name' => array('first' => 'Hank', 'last' => 'Hill'),
		  'phone_number' => '210-555-5555',
		  'address' => '1800 Pennsylvania Avenue'];

$dale = ['name' => array('first' => 'Dale', 'last' => 'Gribble'),
		  'phone_number' => '210-555-5555',
		  'address' => '1800 Pennsylvania Avenue'];

$bill = ['name' => array('first' => 'Bill', 'last' => 'Dauterive'),
		  'phone_number' => '210-555-5555',
		  'address' => '1800 Pennsylvania Avenue'];


$people = [$hank, $dale, $bill];

$person_id = 1;

foreach( $people as $person ) {
	echo "{$person_id}.\t{$person['name']['first']} {$person['name']['last']}\n\tPhone: {$person['phone_number']}\n\tAddress: {$person['address']}\n\n";
		$person_id++;		
}
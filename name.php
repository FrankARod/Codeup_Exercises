<?php
// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$first_name = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello $first_name\n");
usleep(500000);

fwrite(STDOUT, 'Would you like to play a game? ');

// Get the input from user
$answer = trim(fgets(STDIN));

// Output the user's name
fwrite(STDOUT, "You answered: $answer\n");
usleep(500000);

if($answer == 'yes'){
	fwrite(STDOUT, "Enter game now... you are in a castle...\n");
}
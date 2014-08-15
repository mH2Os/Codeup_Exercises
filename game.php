<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');
usleep(500000);

// Get the input from user
$first_name = trim(fgets(STDIN));
usleep(500000);

// Output the user's name
fwrite(STDOUT, "Hello $first_name\n");
usleep(500000);

fwrite(STDOUT, "You wanna play a game $first_name?\n Enter 'yes' or 'no' ");
usleep(500000);

$answer = trim(fgets(STDIN));
usleep(500000);

$attempts = 1;

// if($answer == 'yes') {
// 	echo "Grand, lets play HIGHER and LOWER\n";
// } else {
// 	echo "Awh, Okay, Bye.\n";
// 	exit();
// }

// $number = rand($argv[1], $argv[2]);
// usleep(500000);

// fwrite(STDOUT, "Guess a number between $argv[1] and $argv[2] \n");
// usleep(500000);

do{
	if($answer == 'yes') {
		echo "Grand, lets play HIGHER and LOWER\n";
	} else {
		echo "Awh, Okay, Bye.\n";
		usleep(1000000);
		exit();
	}
	if($argc == 3) {
		$min = $argv[1];
		$max = $argv[2];
	} else {
		$min = 1;
		$max = 100;
	}
	$number = rand($min, $max);
	usleep(500000);

	fwrite(STDOUT, "Guess a number between {$min} and {$max} \n");
	usleep(500000);

	do {
		$input_answer = trim(fgets(STDIN));

		if($input_answer < $number) {
			echo "^HIGHER^\n Guess? ";
			++$attempts;
		}

		elseif($input_answer > $number) {
			echo "vLOWERv\n Guess? ";
			++$attempts;
		}

		else {
			echo "Good guess, You Win! You got it in $attempts attempts.\n";
		}

	} while ($number != $input_answer);
		echo "Do you want to play again? \n";
		usleep(500000);


	$attempts = 1;

	$answer = trim(fgets(STDIN));
usleep(500000);

} while ($answer == 'yes');
	echo "Awh, Okay, Bye.\n";
	usleep(1000000);

	exit();


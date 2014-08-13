<?php

$movie = 'Jurassic Park';

$age = 10;

$has_a_parent = false;

echo "You are $age years old.\n";

if ($age > 18 || ($has_a_parent && $age > 13) ) {
	if ($age > 21) {
		//does the person prefer beer or wine
			echo "Go to the Drafthouse and get a beer\n";

		}


		echo "You can watch $movie\n";
}

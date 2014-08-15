<?php

$movie = 'Jurassic Park';

$age = ;

$has_a_parent = false;

echo "You are $age years old.\n";

if ($age > 18 || ($has_a_parent && $age > 13) ) {
	if ($age > 21) {
		//does the person prefer beer or wine
			echo "Go to the Drafthouse and get a beer\n";

		}

		echo "You can watch $movie\n";
}

if($age < 18) {
	echo "You can't watch $movie\n";
}

if($age < 18) {
	echo "You can't watch $movie\n";
} else {
	echo "You can watch $movie\n";
}

if ($age >= 18) {
	echo "You can watch $movie\n";
} elseif ($age >= 13) {
	echo "Maybe you should try the avengers\n";
}


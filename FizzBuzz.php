<?php

$a = [1];
$step[0] = 3;
$step[1] = 5;
$step[2] = 15;

for ($a = 1; $a <= 100; $a++) {
	$theList[$a] = $a;
}

for ($b = $step[0]; $b <= 100; $b = $b + $step[0]) {
	$theList[$b] = "Fizz";
}

for ($c = $step[1]; $c <= 100; $c = $c + $step[1]) {
	$theList[$c] = "Buzz";
}

for ($d = $step[2]; $d <= 100; $d = $d + $step[2]) {
	$theList[$d] = "FizzBuzz";
}

print_r($theList);

?>

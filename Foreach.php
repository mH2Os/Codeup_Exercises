<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
// foreach ($things as $datum) {
//     if (is_array($datum)) {
//         print_r($datum);

//     } elseif (is_int($datum)) {
//         echo "{$datum} is a interger\n";

//     } elseif (is_float($datum)) {
//     	echo "{$datum} is a float\n";

//     } elseif (is_bool($datum)) {
//     	echo "{$datum} is a boolean\n";

//     } elseif (is_null($datum)) {
//     	echo "{$datum} is null\n";

//     } elseif (is_string($datum)) {
//     	echo "{$datum} is string\n";
//     }
// }

foreach ($things as $datum) {
    if (is_scalar($datum)) {
        echo "{$datum} is scalar\n";
	}
}

foreach ($things as $datum) {
    if (is_scalar($datum)) {
        echo "{$datum}\n";
	}
}
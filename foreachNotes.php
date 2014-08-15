<?php


$students = array(
    array('name' => 'Virginia Potts', 'age' => 29, 'phone' => '210'),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38),
    'testing'
);

//echo $students[1]['name'];

foreach ($students as $student) {

// 	echo $student['name'] . " and age is " . $student['age'] . "\n";
// }
	

    foreach ($student as $key => $value) {
        echo "Student's " . ucfirst($key) . "is $value\n";
    }

    echo "-----------------------------------\n";
}

// $data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
// foreach ($data as $datum) {
//     if (is_numeric($datum)) {
//         echo "{$datum} is a number\n";
//     } else if (is_string($datum)) {
//         echo "{$datum} is a string\n";
//     }
// }

// $animal_types = array('dogs', 'cats', 'birds', 'narwhals');
// foreach ($animal_types as $animal) {
//     echo "Old McDonald had a farm, and on that farm he raised some {$animal}\n";
//     usleep(500000);
// }


// $numbers = array(1, 2, 3, 4, 5);

// foreach ($numbers as $value) {
// 	echo "\$number has a value of {$value}\n";
// }


// $number = array(1, 2, 3, 4, 5);
// foreach ($numbers as $value) {
// 	$new_number = $value *2;
// 	echo "$value * 2 is {$new_number}\n";
// }
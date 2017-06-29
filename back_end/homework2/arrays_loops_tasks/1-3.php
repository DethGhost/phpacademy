<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 29.06.2017
 * Time: 22:17
 */

// Task 1

$array = ['html', 'css', 'php', 'js', 'jq'];

foreach ($array as $item) {
    echo $item . "<br>";
}

// Task 2

$array_numbers = [1, 20, 15, 17, 24, 35];

$result = 0;

foreach ($array_numbers as $number) {
    $result += $number;
}

echo "<br> Sum of all numbers from array $result";

// Task 3

$array_numbers_two = [26, 17, 136, 12, 79, 15];

$result_two = 0;

foreach ($array_numbers_two as $number) {
    $result_two += pow($number, 2);
}

echo "<br> Sum of all square numbers from array $result_two";


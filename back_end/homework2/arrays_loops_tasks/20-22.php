<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 22:09
 */

// Task 20

$x = 'x';
$pyramid = "";
for ($i = 0; $i < 20; $i++) {
    $pyramid .= $x . "<br>";
    $x .= 'x';
}
echo $pyramid;

// Task 21
echo "<br>";

$num = "";
for ($i = 1; $i <= 9; $i++) {
    $j = '';
    for ($jj = 0; $jj < $i; $jj++) {
        $j .= $i;
    }
    $num .= $j . '<br>';
}
echo $num;

// Task 22
echo "<br>";
$xx = 'xx';
$temp = '';
$i = 1;
while ($i <= 5) {
    $temp .= $xx . "<br>";
    $xx .= 'xx';
    $i++;
}
echo $temp;


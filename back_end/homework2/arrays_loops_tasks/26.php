<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 23:52
 */

$arr = array();

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}

$sub = 1;
$nechet = 'Нечетные числа: ';
foreach ($arr as $key => $item) {
    if (($key % 2) != 0) {
        $nechet .= $item . ', ';
        continue;
    }
    $sub *= $item;
}
echo $nechet . " результат произведения чисел: $sub";
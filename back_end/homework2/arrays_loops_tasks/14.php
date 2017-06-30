<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 21:42
 */

$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $e) {
    if ($e == 3 || $e == 4 || $e == 2) {
        echo "Есть!";
    } else {
        echo "Нет!";
    }
}
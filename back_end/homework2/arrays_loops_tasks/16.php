<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 21:46
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $item) {
    echo $item;
    if (($item % 3) == 0) {
        echo "<br>";
    } else {
        echo ", ";
    }
}
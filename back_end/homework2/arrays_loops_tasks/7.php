<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 29.06.2017
 * Time: 22:51
 */

$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $item) {
    if ($item > 3 && $item < 10) {
        echo "$item<br>";
    }
}
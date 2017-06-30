<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 23:35
 */

$arr = array();

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 20);
}
print_r($arr);
$max = max($arr);
$max_key = array_search(max($arr), $arr);
$min = min($arr);
$min_key = array_search(min($arr), $arr);
$arr[$max_key] = $min;
$arr[$min_key] = $max;
print_r($arr);

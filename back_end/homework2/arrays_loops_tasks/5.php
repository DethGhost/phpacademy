<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 29.06.2017
 * Time: 22:45
 */

$arr = ['Коля' => '200',
    'Вася' => '300',
    'Петя' => '400'];

foreach ($arr as $key => $value) {
    echo "$key зарплата - $value<br>";
}
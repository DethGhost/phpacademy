<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 29.06.2017
 * Time: 22:48
 */

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
$en = array();
$ru = array();

foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}

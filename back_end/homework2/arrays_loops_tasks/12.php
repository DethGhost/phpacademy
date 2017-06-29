<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 29.06.2017
 * Time: 23:20
 */

$n = 1000;
$num = 0;
while ($n > 50) {
    $n = $n / 2;
    $num++;
}

echo $num . '<br>' . $n . '<br>';
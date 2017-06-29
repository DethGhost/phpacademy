<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 29.06.2017
 * Time: 22:41
 */

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

echo "Keys:";
foreach ($arr as $key => $value) {
    echo "<br> $key";
}

echo "<br>Values:";
foreach ($arr as $key => $value) {
    echo "<br> $value";
}

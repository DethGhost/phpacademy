<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 12.06.2017
 * Time: 21:15
 */

$age = 29;

if ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
} elseif ($age >= 0) {
    echo "Вам еще рано работать";
}else{
    echo "Неизвестный возраст";
}
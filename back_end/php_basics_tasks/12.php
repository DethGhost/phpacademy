<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 12.06.2017
 * Time: 21:27
 */

$day = 15;

switch (true) {
    case ($day >= 1 && $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day <= 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
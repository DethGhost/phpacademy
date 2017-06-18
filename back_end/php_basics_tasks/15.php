<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 12.06.2017
 * Time: 21:45
 */

$a = 7;

$b = 11;

$operator = "/";

echo '$a = ' . $a . '<br />$b = ' . $b;
echo '<br />$operator = ' . $operator;
echo '<br />';
if (is_nan($a)) {
    echo '$a НЕ ЧИСЛО';
} else if (is_nan($b)) {
    echo '$b НЕ ЧИСЛО';
} else {
    switch ($operator) {
        case ("+"):
            echo '<br /> Answer: ';
            echo $a + $b;
            break;
        case ("-"):
            echo '<br /> Answer: ';
            echo $a - $b;
            break;
        case ("/"):
            if($b != 0){
            echo '<br /> Answer: ';
            echo $a / $b;
            }else{
                echo 'на 0 делить нельзя. Проверьте переменную $b';
            }
            break;
        case ("*"):
            echo '<br /> Answer: ';
            echo $a * $b;
            break;
        default:
            die("Не корректный оператор, доступные: +, -, /, *");
    }
}
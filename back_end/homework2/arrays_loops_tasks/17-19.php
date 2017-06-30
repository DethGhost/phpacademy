<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 21:50
 */

//Task 17
$months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'];
$month = 'June';

foreach ($months as $m) {
    if ($m === $month) {
        $m = '<b>' . $m . '</b>';
    }
    echo "$m ";

}

// Task 18
echo "<br>";
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

foreach ($days as $day) {
    if ($day === 'Sunday' || $day === 'Saturday') {
        $day = "<b>$day</b>";
    }
    echo $day . " ";
}

// Task 19
echo "<br>";
$day = 'Friday';

foreach ($days as $d) {
    if ($day === $d) {
        $d = "<i>$d</i>";
    }
    echo $d . " ";
}
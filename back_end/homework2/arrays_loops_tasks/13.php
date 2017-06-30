<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 21:30
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$html = "<table border='1' cellpadding='8'><thead>";
foreach ($arr as $item) {
    $html .= "<th>Таблица умножение на $item</th>";
}

$html .= "</thead><tbody>";
foreach ($arr as $item) {
    $html .= "<tr>";
    foreach ($arr as $item2) {
        $html .= "<td>$item2 X $item = " . ($item * $item2) . "</td>";
    }
    $html .= "</tr>";
}
$html .= "</tbody></table>";

echo $html;


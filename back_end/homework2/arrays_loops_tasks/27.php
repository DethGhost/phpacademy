<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 01.07.2017
 * Time: 0:07
 */

$row = rand(5, 10);
$col = rand(5, 10);
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

echo getTable($row, $col, $colors);


function getTable($rows, $cols, $arr_with_colors = null)
{
    $html = "<table border='1' cellpadding='8'>";
    $html .= "<tbody>";
    for ($i = 0; $i < $cols; $i++) {
        $html .= "<tr>";
        for ($j = 0; $j < $rows; $j++) {
            $html .= "<td style='background: " .
                ((!empty($arr_with_colors)) ? $arr_with_colors[array_rand($arr_with_colors, 1)] : "white") .
                "'>" . rand(1, 10000) . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody></table>";

    return $html;
}
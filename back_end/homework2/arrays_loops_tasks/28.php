<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 01.07.2017
 * Time: 0:23
 */

$html = "<table border='1' cellpadding='8'>";

$html .= "<tbody>";
for ($i = 1; $i <= 10; $i++) {
    $html .= "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $html .= "<td>$j X $i = " . ($i * $j) . "</td>";
    }
    $html .= "</tr>";
}
$html .= "</tbody></table>";

echo $html;
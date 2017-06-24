<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 6/24/2017
 * Time: 10:25 AM
 *
 */

$arr = [
    [
        'name' => "Ivan",
        'age' => 22,
        'position' => "php"],
    [
        'name' => "Viktor",
        'age' => 23,
        'position' => "java"],
    [
        'name' => "Vitaliy",
        'age' => 25,
        'position' => "hr"]
];


function buildHtmlTable($array)
{

    $index = array_keys($array[0]);
    $html = "<table border='1' cellpadding='10'><thead>";
    foreach ($index as $item) {
        $html .= "<th>" . $item . "</th>";
    }
    $html .= "</thead><tbody>";
    foreach ($array as $item) {
        $html .= "<tr>";
        foreach ($index as $value) {
            $html .= "<td>" . $item[$value] . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody></table>";

    return $html;
}

echo buildHtmlTable($arr);
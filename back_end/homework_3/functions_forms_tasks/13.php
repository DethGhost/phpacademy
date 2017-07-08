<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 08.07.2017
 * Time: 22:16
 */
header('Content-Type: text/html; charset=utf-8');
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

print_r(getUniqueWordsWithCount($string));
function getUniqueWordsWithCount($string)
{
    $arrayOfWords = explode(' ', $string);
    $tempArray = [];
    foreach ($arrayOfWords as $item) {
        if (array_key_exists($item, $tempArray))
            $tempArray[$item]++;
        else
            $tempArray[$item] = 1;
    }
    $result = '';
    arsort($tempArray);
    foreach ($tempArray as $key => $value) {
        $result .= $key . ' - ' . $value . '<br>';
    }
    return $result;
}
<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 06.07.2017
 * Time: 21:58
 */

if (!empty($_POST['text'])) {
    print_r(getThreeLongestWords($_POST['text']));
    die();
}

$html = "
<h1>Delimeter of words is ' ' (space)</h1>
<form action='' method='POST'>
<textarea name='text'></textarea><br>
<button type='submit'>Send</button>
</form>
";
echo $html;

function getThreeLongestWords($arr)
{
    $threeLongestWords = '';
    $array = explode(' ', $arr);

    // this solution i found on stackoverflow when i search in web how to sort array by value length
    array_multisort(array_map('strlen', $array), $array);
    for ($i = 0; $i < 3; $i++) {
        $threeLongestWords .= array_pop($array) . '<br>';
    }

    return $threeLongestWords;
}
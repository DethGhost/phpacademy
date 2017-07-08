<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 06.07.2017
 * Time: 21:36
 */

if (!empty($_POST['firstText']) && !empty($_POST['secondText'])) {
    print_r(getCommonWords($_POST['firstText'], $_POST['secondText']));
    die();
}

$html = "
<h1>Delimeter of words is ' ' (space)</h1>
<form action='' method='POST'>
<textarea name='firstText'></textarea><br>
<textarea name='secondText'></textarea>
<button type='submit'>Send</button>
</form>
";
echo $html;

function getCommonWords($a, $b)
{
    $array = [];
    $aArray = explode(' ', $a);
    $bArray = explode(' ', $b);
    foreach ($aArray as $item) {
        if (in_array($item, $bArray)) {
            $array[] = $item;
        }
    }
    return $array;
}

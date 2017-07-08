<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 08.07.2017
 * Time: 20:50
 */
header('Content-Type: text/html; charset=utf-8');
if (!empty($_POST['text'])) {
    print_r(countUniqueWord($_POST['text']));
}

$html = '<form action="" method="POST" >
<label for="text">Enter max length for word, and we delete all other.</label>
<textarea name="text" id="text"></textarea>
<br><button type="submit">Count unique words</button>
</form>
';
echo $html;

function countUniqueWord($text)
{

    $arrayOfWords = explode(' ', $text);
    $tempArray = [];
    foreach ($arrayOfWords as $word) {
        $tempArray[$word] = 0;
    }

    return 'In text ' . count($tempArray) . ' unique words';
}
<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 08.07.2017
 * Time: 21:10
 */
header('Content-Type: text/html; charset=utf-8');
if (!empty($_POST['text'])) {
    print_r(firstCharToUppercase($_POST['text']));
}

$html = '<form action="" method="POST" >
<label for="text">Enter text.</label>
<textarea name="text" id="text"></textarea>
<br><button type="submit">Count unique words</button>
</form>
';
echo $html;

function firstCharToUppercase($text)
{

    $arrayOfWords = explode('.', $text);
    $result = '';
    foreach ($arrayOfWords as $word) {
        $word = trim($word);
        $firstChar = mb_strtoupper(mb_substr($word, 0, 1, 'utf-8'), 'utf-8');
        if ($word != '')
            $result .= $firstChar . mb_substr($word, 1, mb_strlen($word, 'utf-8'), 'utf-8') . '. ';
    }


    return $result;
}
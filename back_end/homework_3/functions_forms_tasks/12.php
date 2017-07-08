<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 08.07.2017
 * Time: 22:05
 */
header('Content-Type: text/html; charset=utf-8');
if (!empty($_POST['text'])) {
    print_r(reverseText($_POST['text']));
}

$html = '<form action="" method="POST" >
<label for="text">Enter text.</label>
<textarea name="text" id="text"></textarea>
<br><button type="submit">Send</button>
</form>
';
echo $html;

function reverseText($text)
{

    $arrayOfWords = explode('.', $text);
    $result = '';
    krsort($arrayOfWords);
    foreach ($arrayOfWords as $word) {
        if ($word == '') continue;

        $result .= $word . '. ';
    }

    return $result;
}
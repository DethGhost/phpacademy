<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 08.07.2017
 * Time: 20:26
 */

header('Content-Type: text/html; charset=utf-8');

if (!empty($_POST['word'])) {
    die(reverseString($_POST['word']));
}

$html = "<form action='' method='POST'>
<label for='word'>Word:
<input type='text' name='word' id='word'>
</label>
<br>
<button type='submit'>Send</button>
</form>";
echo $html;


// Но думаю можно воспользоваться функцией strrev()
function reverseString($word)
{
    $wordLength = strlen($word);
    $temp = [];
    $counter = $wordLength - 1;
    for ($i = 0; $i < $wordLength; $i++) {
        $temp[$i] = $word[$counter--];
    }

    $word = implode('', $temp);

    return $word;
}
<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 07.07.2017
 * Time: 21:26
 */
// Вначале я решил что проблема в кодировке (отчасти это было так)
header('Content-Type: text/html; charset=utf-8');

if (!empty($_POST['maxWordLength']) && isset($_FILES['file'])) {

    $file = $_FILES['file']['tmp_name'];
    print_r(deleteWordsByLength($file, $_POST['maxWordLength']));
    die();
}

$html = '<form action="" method="POST" enctype="multipart/form-data">
<label for="maxWordLength">Enter max length for word, and we delete all other.</label>
<input type="number" name="maxWordLength" id="maxWordLength">
<br><input type="file" name="file">
<br><button type="submit">Go deep</button>
</form>
';
echo $html;

function deleteWordsByLength($file, $wordLengs)
{
    $text = '';
    $tempFileData = file_get_contents($file);

//    Чищю от запятых и точек
    $tempFileData = str_replace('.', '', $tempFileData);
    $tempFileData = str_replace(',', '', $tempFileData);

    $array = explode(' ', $tempFileData);
    foreach ($array as $word) {
//        Проблема заключалась в неправильном подсчете кирических символов методом strlen
//        решение нашел с помощью StackOverFlow
        if (mb_strlen($word, 'utf-8') < $wordLengs) {
            continue;
        }
        $text .= $word . PHP_EOL;
    }

    return $text;
}
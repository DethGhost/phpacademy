<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 08.07.2017
 * Time: 19:59
 */
header('Content-Type: text/html; charset=utf-8');

if (!empty($_POST['name']) && !empty($_POST['comment'])) {
    $comment = [
        'name' => $_POST['name'],
        'comment' => $_POST['comment'],
        'time' => time()
    ];
    $comments = [];
    if (file_exists('comments-checked.json')) {
        $jsonData = file_get_contents('comments-checked.json');
        $jsonData = json_decode($jsonData, true);
        $comments = $jsonData;
    }
    $comments[] = $comment;
    file_put_contents('comments-checked.json', json_encode($comments));
    print_r(buildHtmlTable($comments));
}

$html = "<form action='' method='POST'>
<label for='name'>Name:
<input type='text' name='name' id='name'>
</label>
<br>
<label for='comment'>Comment:
<textarea name='comment' id='comment'></textarea> 
</label>
<br>
<button type='submit'>Send your comment</button>
</form>";
echo $html;


function buildHtmlTable($array)
{
    $index = array_keys($array[0]);
    $html = "<table border='1' cellpadding='10'><thead>";
    foreach ($index as $item) {
        $html .= "<th>" . ucfirst($item) . "</th>";
    }
    $html .= "</thead><tbody>";
    foreach ($array as $item) {
        $html .= "<tr>";
        foreach ($index as $value) {
            if ($value == 'time') $item[$value] = date('Y-m-d H:i:s', $item[$value]);

            if (checkBadWords($item[$value])) $item[$value] = "Некорректные слова";

            $html .= "<td>" . strip_tags($item[$value], '<b>') . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody></table>";

    return $html;
}

function checkBadWords($word)
{

    $badWordsArray = [
        'хомяк', "слово", "так далее"
    ];

    foreach ($badWordsArray as $item) {
        if (preg_match('/(' . $item . ')/', $word)) {
            return true;
        }
    }
    return false;

}
<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 22:56
 */

$html = "<form action='' method='POST'>
<label for='numbers'>Enter numbers</label>
<input type='number' name='numb' id='numbers'>
<button type='submit'>Send</button>
</form>";

echo $html;

if (!empty($_POST['numb'])) {
    if (is_numeric($_POST['numb'])) {
        $nb_length = strlen($_POST['numb']);
        $res = 0;
        for ($i = 0; $i < $nb_length; $i++) {
            $res += $_POST['numb'][$i];
        }
        echo $res;
    } else {
        echo "Check your data";
    }
}
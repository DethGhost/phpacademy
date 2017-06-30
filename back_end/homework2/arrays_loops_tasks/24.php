<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 30.06.2017
 * Time: 23:28
 */
$html = "<form action='' method='POST'>
<label for='numbers'>Введите число</label>
<input type='number' name='numb' id='numbers'>
<label for='find'>Введите число для поиска в предыдущем числе</label>
<input type='number' name='find' id='find'>
<button type='submit'>Искать</button>
</form>";

echo $html;

if (!empty($_POST['numb']) && !empty($_POST['find'])) {
    if (is_numeric($_POST['numb']) && is_numeric($_POST['find'])) {
        $nb_length = strlen($_POST['numb']);
        $res = 0;
        for ($i = 0; $i < $nb_length; $i++) {
            if ($_POST['numb'][$i] == $_POST['find'])
                $res++;
        }
        echo 'Число ' . $_POST['find'] . ' встречается - ' . $res . ' раз';
    } else {
        echo "Check your data";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 7/1/2017
 * Time: 10:04 AM
 */

if(!isset($_POST['login']) || !isset($_POST['passwd'])){
die("Error");
}

$data = [
    'login' => $_POST['login'],
    'password' => $_POST['passwd']
];

$json_encode = json_encode($data);

file_put_contents('users.txt', $json_encode.PHP_EOL, FILE_APPEND);


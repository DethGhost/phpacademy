<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 07.07.2017
 * Time: 22:51
 */
header('Content-Type: text/html; charset=utf-8');
$directory = __DIR__;//Просмотрим текущую директорию

print_r(getFilesInDirectory($directory));

function getFilesInDirectory($directory)
{
    $files = '';
    if (is_dir($directory)) {
        if ($dh = opendir($directory)) {
            while (($file = readdir($dh)) !== false) {
                $files .= "файл: $file : тип: " . filetype($directory . '/' . $file) . '<br>';
            }
            closedir($dh);
        }
    }
    return $files;
}
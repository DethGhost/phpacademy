<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 07.07.2017
 * Time: 23:04
 */
header('Content-Type: text/html; charset=utf-8');
$dir = __DIR__;
$fileNameMask = 'php';

print_r(getFilesInDirByName($dir, $fileNameMask));

function getFilesInDirByName($dir, $fileName)
{
    $files = 'You search files which contains <b>' . $fileName . '</b><br>';
    if (is_dir($dir) && $list = opendir($dir)) {
        while (($file = readdir($list)) != false) {
            if (preg_match('/(' . $fileName . ')/', $file))
                $files .= 'File: ' . $file . '<br>';
        }
    }

    return $files;
}
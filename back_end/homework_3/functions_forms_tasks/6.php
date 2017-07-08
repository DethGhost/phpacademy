<?php
/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 07.07.2017
 * Time: 23:24
 */

$dir = 'gallery/';
$fileNameMask = 'php';


if (isset($_FILES['images'])) {
    move_uploaded_file($_FILES["images"]["tmp_name"], $dir . '/' . $_FILES['images']['name']);
    print_r(getTableWithImage($dir));
    die();
}
$html = '<form action="" method="POST" enctype="multipart/form-data">
<br><input type="file" name="images">
<br><button type="submit">Upload</button>
</form>';
echo $html;

function getTableWithImage($dir)
{
    $imageArray = [];
    if (is_dir($dir) && $list = opendir($dir)) {
        while (($file = readdir($list)) != false) {
            if (mime_content_type($dir . $file) == 'image/jpeg' ||
                mime_content_type($dir . $file) == 'image/png' ||
                mime_content_type($dir . $file) == 'image/gif'
            )
                $imageArray[] = $dir . $file;
        }
    }
    $html = "<table border='1' cellpadding='8'>";

    $html .= "<tbody>";
    $html .= "<tr>";
    foreach ($imageArray as $item) {
        $html .= '<td><img src="' . $item . '"></td>';
    }
    $html .= "</tr>";


    $html .= "</tbody></table>";

    return $html;
}
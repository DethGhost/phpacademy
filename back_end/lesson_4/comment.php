<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 7/1/2017
 * Time: 12:08 PM
 */
require_once ('function.php');

$html = getCommentsTable();

$html .= getCommentHtmlForm();

echo $html;
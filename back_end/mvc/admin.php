<?php

require_once("Helpers/Logger.php");
require_once("Helpers/DB.php");

$smarty = new Smarty();
$smarty->setTemplateDir("templates");

$smarty->assign('comments', $comments);
$smarty->display('admin.tpl');



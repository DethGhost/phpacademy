<?php

require_once("Helpers/Logger.php");
require_once("libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->setTemplateDir("templates");
$smarty->assign('errors', Logger::getAllErrors());
$smarty->assign('logs', Logger::getAllRequests());
$smarty->display('log.tpl');




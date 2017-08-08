<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 7/1/2017
 * Time: 12:43 PM
 */

session_start();

$_SESSION['test'.rand(10,500)] = 200;

print_r($_SESSION);
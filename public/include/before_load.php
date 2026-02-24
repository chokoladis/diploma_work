<?php

$_SERVER['DOCUMENT_ROOT'] = '/var/www/redmouse/public/';

require_once  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

ini_set('error_reporting', E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR );

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/../');
$dotenv->load();

//$db = Database::getInstance()->connect();
//var_dump($db);
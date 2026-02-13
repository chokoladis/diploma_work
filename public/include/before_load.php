<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/../');
$dotenv->load();

//$db = Database::getInstance()->connect();
//var_dump($db);
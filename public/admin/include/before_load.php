<?php

use Main\Services\Auth\AuthService;

ini_set('error_reporting', E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR );

require_once  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/../');
$dotenv->load();

session_start();

$authService = new AuthService;
$login = $authService->getLoggedUser();
if (!$login || !\Main\Services\ProfileService::isUserAdmin($login)) {
    $_SESSION['message'] = 'У вас нет доступа в данный раздел';
    header('Location: /auth/');
    exit(403);
}

if (isset($_POST['logout']) && $_POST['logout'] === 'Y') {
    $authService->logout();
}
<?php 

// Подключение автозагрузчика
require_once '../vendor/autoload.php';

// Простая реализация роутинга
$controller = explode('/', $_SERVER['QUERY_STRING'])[0];

// Подключение конфигурации smtp

$smtp = require '../config/smtp.php';

switch ($controller) {
    case '':
        require_once '../views/landing.php';
        break;
    case 'request':
        require_once '../app/controllers/request.php';
        break;
    case 'subscribe':
        require_once '../app/controllers/subscribe.php';
        break;

    default:
        require_once '../views/404.php';
}
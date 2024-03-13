<?php

//Установка phpunit
// composer require phpunit/phpunit
// ./vendor/bin/phpunit --version

//Стартуем сессию
session_start();

//Подключаем автолоадер от Composer
require_once __DIR__ . '/vendor/autoload.php';

//Перенаправляем в роутинг
require_once 'src/routes.php';

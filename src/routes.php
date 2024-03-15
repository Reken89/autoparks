<?php

use App\Controllers\RouteController;
use App\Controllers\LoginController;
use App\Controllers\CabinetController;

//Запускаем разбор адресной строки
//Получаем нужное нам значение
$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

if ($route[2] == "index" || $route[2] == ""){
    $action = new LoginController;
    $action->ViewAuth();
}

//Запускаем заполнение таблицы users
if ($route[2] == "seeder"){
    $action = new RouteController;
    $action->AddUsers();
}

//Процес авторизации
if ($route[2] == "authentication"){
    $action = new LoginController;
    $action->ExaminAuth();
}

//Главная страница приложения
if ($route[2] == "main"){
    $action = new CabinetController();
    $action->ShowCabinet();
}

//Страница со списком парков
if ($route[2] == "parks"){
    $action = new CabinetController();
    $action->ShowAutoparks();
}
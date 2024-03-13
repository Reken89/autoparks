<?php

use App\Controllers\RouteController;

//Запускаем разбор адресной строки
//Получаем нужное нам значение
$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

if ($route[2] == "index" || $route[2] == ""){

}

//Запускаем заполнение таблицы users
if ($route[2] == "seeder"){
    $route = new RouteController;
    $route->AddUsers();
}
<?php
require __DIR__ . '/app/init.php';

$get = explode('?', $_SERVER['REQUEST_URI']);
$route = array_filter(explode('/', $get[0]));

$route[0] = $route[1];

if (!route(0)){
    $route[0] = 'anasayfa';
}

if (!file_exists(controller(route(0)))){
    $route[0] = '404';
}

require controller(route(0));
<?php

define("ROOT", dirname(__DIR__));
define("PUBCIL", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://localhost:8888/learn-php');

require CORE . '/functions.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');


// Временный роутинг
if ($uri === 'learn-php/index') {
    require CONTROLLERS . '/index.php';
} elseif ($uri == 'learn-php/about') {
    require CONTROLLERS . '/about.php';
} else {
    abort();
}
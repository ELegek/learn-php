<?php

define("ROOT", dirname(__DIR__));
define("PUBCIL", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://localhost:8888/learn-php');

require CORE . '/functions.php';


require CONTROLLERS . '/index.php';
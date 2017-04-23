<?php

use VS\Framework\Routing;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', realpath(__DIR__ . '/..') . DS);
define('BASE_PATH', ROOT_PATH . 'public' . DS);
define('SRC_PATH', ROOT_PATH . 'src' . DS);

require(ROOT_PATH . 'vendor' . DS . 'autoload.php');

Routing\Router::Init();
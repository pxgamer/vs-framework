<?php

namespace VS\Framework\Routing;

use System\App;
use System\Request;
use System\Route;

/**
 * Class Router
 */
class Router
{
    public static function Init()
    {
        $app = App::instance();
        $app->request = Request::instance();
        $app->route = Route::instance($app->request);

        $route = Routes::Register($app->route);

        $route->end();
    }

    public static function redirect($location = '/')
    {
        if (!headers_sent()) {
            header('Location: ' . $location);
        }
    }
}
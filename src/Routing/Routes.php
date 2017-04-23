<?php

namespace VS\Framework\Routing;

use System\Route;
use VS\Framework\Controller\Main;

/**
 * Class Routes
 */
class Routes
{
    const CONTROLLERS = '\\VS\\Framework\\Controller\\';

    /**
     * @param Route $Route
     * @return Route
     */
    public static function Register(Route $Route)
    {
        // Custom Routes
        $Route->any('/', [self::CONTROLLERS . 'Main', 'index']);

        // Authentication
        $Route->any('/login', [self::CONTROLLERS . 'Auth', 'login']);
        $Route->any('/register', [self::CONTROLLERS . 'Auth', 'register']);
        $Route->any('/logout', [self::CONTROLLERS . 'Auth', 'logout']);

        // Videos
        $Route->any('/v/{hash}', [self::CONTROLLERS . 'Videos', 'show']);
        $Route->any('/upload', [self::CONTROLLERS . 'Videos', 'upload']);
        $Route->any('/videos/{hash}', [self::CONTROLLERS . 'Videos', 'display']);
        $Route->any('/thumbs/{hash}', [self::CONTROLLERS . 'Videos', 'thumb']);

        // Users
        $Route->any(['/profile', '/profile/{username}'], [self::CONTROLLERS . 'Users', 'show']);

        // Generic Fallback Route
        $Route->any(
            '/*',
            function () {
                (new Main)->error();
            }
        );

        return $Route;
    }
}
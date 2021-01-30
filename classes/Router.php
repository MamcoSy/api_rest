<?php

class Router
{
    protected static array $routes;

    public static function get(string $path, $callback)
    {
        static::$routes['GET'][$path]= $callback;
    }

    public static function post(string $path, $callback)
    {
        static::$routes['POST'][$path]= $callback;
    }

    public static function run(string $url)
    {
        foreach (static::$routes[$_SERVER['REQUEST_METHOD']] as $path => $callback) {
            if ($path == $url) {
                return call_user_func($callback);
            }
        }
    }
}

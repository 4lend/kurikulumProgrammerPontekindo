<?php

namespace Learn\PHP\MVC\PZN\App;

use Illuminate\Http\Exceptions\HttpResponseException;

class Router {
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function):void {
        // TODO and URL Mapping
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run() :void {
        // TODO run controller
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($path == $route['path'] && $method == $route['method']) {
                // echo "Controller : " . $route['controller'] . " Function : " . $route['function'];

                $function = $route['function'];  # ini akan memastikan nama function nya, apakah index, hello, ataupun world

                $controller = new $route['controller'];
                $controller->$function();

                // $controller = new $route['controller'];
                // $function = $route['function'];
                // $controller->$function;
                return;
            }
        }

        http_response_code(404);
        echo 'CONTROLLER NOT FOUND';
    }
}

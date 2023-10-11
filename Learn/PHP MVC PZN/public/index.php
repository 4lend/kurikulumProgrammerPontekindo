<?php 

// echo "Hello PHP MVC";

// if (isset($_SERVER['PATH_INFO'])) {
    // echo $_SERVER['PATH_INFO'];
// } else {
    // echo "TIDAK ADA PATH_INFO";
// }

# $path = '/index';
# if(isset($_SERVER['PATH_INFO'])){
#     $path = $_SERVER['PATH_INFO'];
# }
# require __DIR__ . '/../app/View' . $path . '.php';
# // Jika tidak kita automasi maka kode kita akan seperti dibawah, dan kita juga perlu mengimportnya satu persatu
# // require __DIR__ . '/../app/View/index.php/login';
# // require __DIR__ . '/../app/View/index.php';

require_once __DIR__ . '/../vendor/autoload.php';

use Learn\PHP\MVC\PZN\App\Router;
use Learn\PHP\MVC\PZN\App\Controller\HomeController; 

// Router::add('GET', '/', 'HomeController', 'index');
// Router::add('GET', '/login', 'UserController', 'login');
// Router::add('GET', '/register', 'UserController', 'register');
// Router::add('GET', '/home', 'LandingPage', 'home');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run()

// $className = "Learn\PHP\MVC\PZN\App\Controller\HomeController";
// $functionName = "index";
// 
// $controller = new $className;
// $controller = new "Learn\PHP\MVC\PZN\App\Controller\HomeController";
// $controller->$functionName;

?>
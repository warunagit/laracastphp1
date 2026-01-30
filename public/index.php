<?php
namespace Core;

session_start();
$_SESSION['user'];

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . 'core/functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

//container
require base_path('bootstrap.php');

//router
$router = new \Core\Router();
$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
//dd($_SERVER);
$router->route($uri, $method);

Session::unflash();
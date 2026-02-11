<?php
namespace Core;

const BASE_PATH = __DIR__ . "/../";
//composer class auto loader
require BASE_PATH . '/vendor/autoload.php';

session_start();
//$_SESSION['user']['email'];

require BASE_PATH . 'core/functions.php';

//hand-written class loader
/*
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});*/

//container
require base_path('bootstrap.php');

//router
$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try{
    $router->route($uri, $method);
}catch(ValidationException $exception){
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

Session::unflash();
<?php



//1
//get available routes
$routes = require base_path('routes.php');

//2
//get base url, without params
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//compare requests and available pages
routeToController($uri,$routes);

function routeToController($uri,$routes){
    if(array_key_exists($uri, $routes)){
        require base_path($routes[$uri]);
    }else{
        abort();
    }
}

//3
//response to server codes
function abort($code = 404){
    http_response_code($code);
    require base_path("views/{$code}.view.php");
    die();
}
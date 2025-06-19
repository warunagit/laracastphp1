<?php
//1
//array contains available pages to map
//mapping requests by base url, using array
$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/404" => "controllers/404.php",
];

//2
//get base url, without params
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//compare requests and available pages
routeToController($uri,$routes);

function routeToController($uri,$routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}

//3
//response to server codes
function abort($code = 404){
    http_response_code($code);
    require "views/{$code}.view.php";
    die();
}
<?php
//1
//array contains available pages to map
//mapping requests by base url, using array
/*return [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/notes" => "controllers/notes/index.php",
    "/note" => "controllers/notes/show.php",
    "/notes/create" => "controllers/notes/create.php",
    "/404" => "controllers/404.php",
];*/

$router->get('/','controller/index.php');
$router->get('/about','controller/about.php');
$router->get('/contact','controller/contact.php');

$router->get('/notes','controller/notes/index.php');
$router->get('/note','controller/notes/show.php');
$router->get('/notes/create','controller/notes/create.php');
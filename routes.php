<?php
//1
//array contains available pages to map
//mapping requests by base url, using array
return [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/notes" => "controllers/notes/index.php",
    "/note" => "controllers/notes/show.php",
    "/notes/create" => "controllers/notes/create.php",
    "/404" => "controllers/404.php",
];
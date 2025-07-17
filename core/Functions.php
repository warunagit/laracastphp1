<?php
const BASE_PATH = __DIR__."/../";
use Core\Response;
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

function authorize($condition, $status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}

function base_path($path){
    return BASE_PATH.$path;
}

function view($path,$attributes=[]){
    extract($attributes);
    require base_path("/views/{$path}");
}

 function abort($code = 404){
        http_response_code($code);
        require base_path("views/{$code}.view.php");
        die();
    }
?>
<?php
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
//dd($_SERVER);
//dd($_SERVER['REQUEST_URI']);
function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}
?>
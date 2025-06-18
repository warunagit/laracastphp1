<?php
require 'functions.php';
$url = $_SERVER['REQUEST_URI'];
//dd($_SERVER);
if($url=="/sites/laracast/php/"){
    require "controllers/index.php";
}
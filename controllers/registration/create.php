<?php

if($_SESSION['user'] ?? false){
    header('locations: /');
    exit();
}

view('registration/create.view.php');
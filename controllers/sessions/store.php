<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];

//validate form inputs
$errors=[];
if(!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}
if(!Validator::string($password,8,15)){
    $errors['password'] = 'Please provide password of at least 8 characters';
}

//log in the user if credentials match
login(['email'=>$email]);
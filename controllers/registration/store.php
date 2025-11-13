<?php

use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

//validate form inputs
$errors=[];
if(Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}
if(Validator::string($password,8,15)){
    $errors['password'] = 'Please provide password of at least 8 characters';
}
 
if(!empty($errors)){
    return view('registration/create.view.php',[
        'errors'=>$errors
    ]);
}

//check if the account already exsist or not

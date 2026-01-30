<?php

use Core\Authenticator;
use Http\Forms\LoginForm;
 
$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

//validate the form data
if($form->validate($email, $password)){

    if((new Authenticator)->attempt($email, $password)){
        redirect("/");
    }else{
        $form->error('email','No matching account found for that email and password.');
    }
}else{
    return view('session/create.view.php',[
        'errors'=>$form->errors()
    ]);
}
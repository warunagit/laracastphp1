<?php
use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if(!$form->validate($email, $password)){
    return view('session/create.view.php',[
        'errors'=>$form->errors()
    ]);
}

//match the credentials
$auth = new Authenticator();
$auth->attempt($email, $password);
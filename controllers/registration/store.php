<?php

use Core\App;
use Core\Database;
use Core\Validator;

//dd($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

//dd($_POST);

//validate form inputs
$errors=[];
if(!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}
if(!Validator::string($password,8,15)){
    $errors['password'] = 'Please provide password of at least 8 characters';
}
 
//dd($errors);

if(!empty($errors)){
    return view('registration/create.view.php',[
        'errors'=>$errors
    ]);
}

//check if the account already exsist or not
$db = App::resolve(Database::class);
$user = $db->query('SELECT * FROM users WHERE email=:email', [
    'email'=>$email
])->find();
// dd($user);
if($user){
    //there is a user exist with an account
    header('location: /');
    $_SESSION['user']=[
        'email'=>$email
    ];
    exit();
}else{
    //if there is no user
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)',[
        'email'=>$email,
        'password'=> password_hash($password, PASSWORD_BCRYPT)
    ]);
}

//mark that user has logged in
$_SESSION['user']=[
    'email'=>$email
];

header('location: /');
exit();
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
if(!Validator::string($password)){
    $errors['password'] = 'Please provide a valid password of at least 8 characters';
}

if(!empty($errors)){
    return view('sessions/create.view.php',[
        'errors'=>$errors
    ]);
}

//match the credentials
$user = $db->query('SELECT * FROM users WHERE email = :email',[
    'email'=>$email
])->find();

if(!$user){
    return view('sessions/create.view.php',[
        'errors'=>[
            'email'=>' No matching account found for that email.'
        ]
    ]);
}

//we have a user, but should check the password
if(password_verify($password,$user['password'])){
    login([
        'email'=>$email
    ]);

    header('location: /');
    exit();
}

return view('sessions/create.view.php',[
        'errors'=>[
            'email'=>' No matching account found for that email and password.'
        ]
    ]);

//log in the user if credentials match
//login(['email'=>$email]);
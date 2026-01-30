<?php

use Core\Database;
use Core\Validator;
use Core\App;

require base_path('Core/Validator.php');

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body is no more than 1000 words is required';
}

//validation
if (!empty($errors)) {
    return view(
    "notes/create.view.php",[
        'page'=>"Create Note", 
        'errors'=>$errors
        ]
    );
}

$db->query(
    'INSERT INTO notes(body,user_id) VALUES(:body, :user_id)',
    [
        'body' => $_POST['body'],
        'user_id' => 1
    ]
);

$_SESSION['_flashed']['errors'] = $form->errors();

header('location: /notes');
die();
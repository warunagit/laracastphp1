<?php
$page="Create Note";
$config = require 'config.php';
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors = [];

    if(strlen($_POST['body'] == 0)){
        $errors['body'] = 'A body is required';
        dd(empty($errors));
    }

    /*if(empty($errors)){
        $db->query(
        'INSERT INTO notes(body,user_id) VALUES(:body, :user_id)',
    [
                'body'=>$_POST['body'], 
                'user_id' => 1
            ]
        );
    }*/
    //dd(strlen($_POST['body']));
    //dd(empty($errors));
}


require "views/note-create.view.php";
<?php
use Core\App;
use Core\Database;
use Core\Validator;


$currentUserId = 1;

$db = App::resolve(Database::class);

//find the corresponding note
$note_id = $_POST['id'];
$query = "SELECT * FROM notes WHERE id = ?";
$note = $db->query($query, [$note_id])->findOrFail();
//authorize current user
authorize($note['user_id'] == $currentUserId);
//validate form data
$errors=[];
if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body is no more than 1000 words is required';
}
//if no errors, update the record in db
if(count($errors)){
    return view('notes/edit.view.php',[
        'heading'=>'Edit Note',
        'errors'=>$errors,
        'note'=>$note
    ]);
}

$db->query('UPDATE notes SET body = :body WHERE id = :id',[
    'id' => $_POST['id'],
    'body'=> $_POST['body']
]);

//redirect the user
header('location: /notes');
die();
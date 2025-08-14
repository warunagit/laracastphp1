<?php

use Core\App;
use Core\Database;

$currentUserId = 1;

$db = App::resolve(Database::class);

$note_id = $_GET['id'];
$query = "SELECT * FROM notes WHERE id = ?";
$note = $db->query($query, [$note_id])->findOrFail();
//dd($note);
authorize($note['user_id'] == $currentUserId);

view(
    "notes/edit.view.php",[
        'page' => "Edit Notes",
        'note' => $note
    ]
);
<?php

use Core\Database;
use Core\App;

$currentUserId = 1;

$db = App::resolve(Database::class);

$note_id = $_GET['id'];
$query = "SELECT * FROM notes WHERE id = ?";
$note = $db->query($query, [$note_id])->findOrFail();

authorize($note['user_id'] == $currentUserId);

view(
    "notes/show.view.php",
    [
        'page' => "Notes",
        'note' => $note
    ]
);
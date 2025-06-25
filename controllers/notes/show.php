<?php
    $currentUserId = 1;

    $config = require base_path('config.php');
    $db = new Database($config['database']);

    $note_id = $_GET['id'];
    $query = "SELECT * FROM notes WHERE id = ?";
    $note = $db->query($query,[$note_id])->findOrFail();

    authorize($note['user_id'] == $currentUserId);

    view(
    "notes/show.view.php",[
        'page'=>"Notes", 
        'note'=>$note
    ]
);
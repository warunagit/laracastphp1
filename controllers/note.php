<?php
    $page="Notes";
    $currentUserId = 1;

    $config = require 'config.php';
    $db = new Database($config['database']);

    $note_id = $_GET['id'];
    $query = "SELECT * FROM notes WHERE id = ?";
    $note = $db->query($query,[$note_id])->findOrFail();

    authorize($note['user_id'] == $currentUserId);
    
    require "views/note.view.php";
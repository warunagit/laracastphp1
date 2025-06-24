<?php
    $page="Notes";
    $currentUserId = 1;

    $config = require 'config.php';
    $db = new Database($config['database']);

    $id = $_GET['id'];
    $query = "SELECT * FROM notes WHERE id = ?";
    $note = $db->query($query,[$id])->fetch();



    if(! $note){
        abort();
    }
     if($note['user_id'] != $currentUserId){
        abort(Response::FORBIDDEN);
    }
    
    require "views/note.view.php";
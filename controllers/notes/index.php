<?php
    $page="Notes";

    $config = require 'config.php';
    
    $db = new Database($config['database']);
    $notes = $db->query('SELECT * FROM notes where user_id = 1')->get();

    //dd($notes);

require "views/notes/index.view.php";
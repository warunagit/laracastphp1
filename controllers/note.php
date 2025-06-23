<?php
    $page="Notes";

    $config = require 'config.php';
    $db = new Database($config['database']);

    $id = $_GET['id'];
    $query = "SELECT * FROM notes WHERE id = ?";
    $note = $db->query($query,[$id])->fetch();

    //dd($notes);

require "views/note.view.php";
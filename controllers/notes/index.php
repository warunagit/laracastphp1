<?php
   $config = require base_path('config.php');
    
    $db = new Database($config['database']);
    $notes = $db->query('SELECT * FROM notes where user_id = 1')->get();

    //dd($notes);

view(
    "notes/index.view.php",[
        'page'=>"Home", 
        'notes'=>$notes
    ]
);
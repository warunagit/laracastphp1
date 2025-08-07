<?php

    use Core\App;
    use Core\Database;
    

    $db = App::resolve(Database::class);

    $notes = $db->query('SELECT * FROM notes where user_id = 1')->get();

    //dd($notes);

view(
    "notes/index.view.php",[
        'page'=>"Home", 
        'notes'=>$notes
    ]
);
<?php
    use Core\Database;

    $currentUserId = 1;

    $config = require base_path('config.php');
    $db = new Database($config['database']);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        ///Delete note
        $note_id = $_GET['id'];
        $query = "SELECT * FROM notes WHERE id = ?";
        $note = $db->query($query,[$note_id])->findOrFail();

        authorize($note['user_id'] == $currentUserId);

        $db->query("DELETE FROM notes WHERE id=:id",[
            'id'=>$_POST['id']
        ]);

        header('location: /notes');
    }else{

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
}
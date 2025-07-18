<?php

use Core\Database;

$currentUserId = 1;

$config = require base_path('config.php');
$db = new Database($config['database']);

///Delete note
$note_id = $_GET['id'];
$query = "SELECT * FROM notes WHERE id = ?";
$note = $db->query($query, [$note_id])->findOrFail();

authorize($note['user_id'] == $currentUserId);

$db->query("DELETE FROM notes WHERE id=:id", [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
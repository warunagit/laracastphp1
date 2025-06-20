<?php
require 'functions.php';
//require 'router.php';
require 'Database.php';


//dd($posts);
$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = ?";

$posts = $db->query($query,['id'])->fetch();

/*foreach($posts as $post){
    echo "<li>{$post['title']}</li>";
}*/

dd($posts['title']);
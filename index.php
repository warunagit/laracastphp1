<?php
require 'functions.php';
//require 'router.php';

//connect to mysql
$dsn = "mysql:host=;port=3306;user=root;password=1234;dbname=laracastphp;";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
//dd($posts);
foreach($posts as $post){
    echo "<li>{$post['title']}</li>";
}
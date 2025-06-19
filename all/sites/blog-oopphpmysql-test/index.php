<?php
require 'config/autoloadfunction.php';

$database=new Database();
$db=$database->getConnection();
$article = new Article($db);
$category = new Category($db);

$stmt = $article->getArticles();
$num = $stmt->rowCount();

$pageTitle = "OOP Blog";
include_once "layout/layout-header.php";

echo "<div class='right-button-margin'>
    <a href='article-create.php' class='btn btn-default pull-right'>Create Product</a>
</div>";

if($num>0){
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        echo "<div class='col-12' style='height:40px;'>";
            //get category name by category_id
            $category->id = $category_id;
            $category->getNameById();
            echo $category->name;

            //get article title
            echo "<a href='article-read.php/{$id}'>Read: {$title}</a> OR Delete: <a href='article-delete.php/{$id}'>Read: {$title}</a>";

        echo "</div>";
    }
}

//pagination
//if first page -> show -> Read More
//other pages -> show -> page x of 10

include_once "layout/layout-footer.php";
?>
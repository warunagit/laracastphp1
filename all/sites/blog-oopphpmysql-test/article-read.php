<?php
//$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
//https://www.php.net/manual/en/function.parse-url.php
//https://support.rocketspark.com/hc/en-us/articles/17987934116121-What-is-Blog-SEO-and-how-to-Edit-Meta-Data-on-Blog-Posts

$path = parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH);
$id = isset(explode('/', $path)[4]) ? explode('/', $path)[4] : die('ERROR: missing ID.');

require 'config/autoloadfunction.php';

$database=new Database();
$db=$database->getConnection();
$article = new Article($db);
$category = new Category($db);
$user = new User($db);

//1-load article
$article->id=$id;
$article->getArticle();

$pageTitle = $article->title;
include_once "layout/layout-header.php";

//3-get category
$category->id = $article->category_id;
$category->getNameById();
echo $category->name."<br/>";

//2-get article content
echo    "<p style='text-align:center'>".
            $article->content.
        "</p>";

//4-get user
$user->id=$article->user_id;
$user->getUsernameById();

echo    "<div style='text-align:right'>By: ".
            $user->username." ".$article->timestamp.
        "</div>";

include_once "layout/layout-footer.php";
?>
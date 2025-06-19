<?php
// check if value was posted
///=if($_POST){

    $path = parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH);
    $id = isset(explode('/', $path)[4]) ? explode('/', $path)[4] : die('ERROR: missing ID.');
  
    // include database and object file
    require 'config/autoloadfunction.php';
  
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
  
    // prepare product object
    $article = new Article($db);
      
    // set product id to be deleted
    //$article->id = $_POST['article_id'];
    $article->id = $id;
      
    // delete the product
    if($article->delete()){
        echo "Article was deleted.";
    }
      
    // if unable to delete the product
    else{
        echo "Unable to delete article.";
    }
//}
?>
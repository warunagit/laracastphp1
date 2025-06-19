<?php
require 'config/autoloadfunction.php';

$database=new Database();
$db=$database->getConnection();
$article = new Article($db);
$category = new Category($db);
$user = new User($db);

$pageTitle = "Create Product";
include_once "layout/layout-header.php";

//if button click and have data, save post
if($_POST){
    //print_r($_POST);
    $article->title=$_POST['title'];
    $article->content=$_POST['content'];
    $article->category_id=$_POST['category_id'];
    $article->user_id=$user->id;

    if($article->createArticle()){
        echo "<div class='alert alert-success'>Article was created.</div>";

        $article->uploadPhoto();
    }
}
?>

<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">  
    <div class="container">
        <div class="col-12">
            <input type='text' name='title' placeholder="Title" class='form-control' />
        </div>
        <div class="col-12">
            <textarea name='content' placeholder="Content" class='form-control'></textarea>
        </div>
        <div class="col-12">
            <?php
                $stmt = $category->getCategories();
                echo "<select class='form-control' name='category_id'>";
                    echo "<option>Select category...</option>";
                    while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
                        extract($row_category);
                        echo "<option value='{$id}'>{$name}</option>";
                    }
                echo "</select>";
            ?>
        </div>
        <div class="col-12">
            <input type='file' accept="image/jpg" name='image'  class='form-control' />
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
         </div>
    </div>
<?php
include_once "layout/layout-footer.php";
?>
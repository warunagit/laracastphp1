<?php
#require basic http authentication, built in to most browsers
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] !== 'waruna' || $_SERVER['PHP_AUTH_PW'] !== '1234') {
    header('WWW-Authenticate: Basic realm="Blog Post"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Go away';
    exit;
}
#check if form was submitted
if(isset($_POST["title"])){
   #get the values submitted
   $title = $_POST["title"];
   $content = $_POST["content"];
   #only allow letters, numbers, dashes and underscores in the path
   $path = strtolower(preg_replace('/[^0-9a-zA-Z-_]/', '', $_POST["path"]));
   #at this point we'll save a new file with the blog post data in JSON format
   $json = json_encode([
      "title"=>$title,
      "content"=>$content
   ]);
   #save the json data in a file in the "files" folder
   file_put_contents("files/" . $path . ".json", $json);
   #Your blog post is now saved!
}
?>

<!doctype html>
<html>
   <head>
      <title>Create a Blog Post</title>
   </head>
   <body>
      <div style="width:500px;">
         <form method="post" style="display:flex;flex-direction: column;justify-content: center;">
            <input name="title" placeholder="Title"/>
            <textarea name="content"  placeholder="Content"></textarea>
            <input name="path"  placeholder="Path"/>
            <!-- path we'll use to view the blog bost -->
            <button type="submit">Save</button>
         </form>
      </div>      
   </body>
</html>
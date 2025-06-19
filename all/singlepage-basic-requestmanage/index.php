hello nything here</br></br>

<?php
#https://stackoverflow.com/questions/6768793/get-the-full-url-in-php
//$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link;

print_r(explode('/', $actual_link));
echo '</br>';

$domain = explode('/', $actual_link)[3];
echo 'domain: '.$domain.'</br>';

$category = explode('/', $actual_link)[4];
echo 'category: '.$category.'</br>';

$article_id = explode('/', $actual_link)[5];
echo 'article_id: '.$article_id.'</br>';

$article_title = explode('/', $actual_link)[6];
echo 'title: '.$article_title.'</br>';
?>
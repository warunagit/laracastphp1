Laracasts - PHP for Beginners (2023 Edition)
https://www.youtube.com/playlist?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC

a
start php from cmd: php -S localhost:8080 //htdoc folder
start from custom root folder: php -S localhost:8888 -t public
php -S localhost:8080 -d display_errors=1 -t public\


1
Pages saperates into views and controllers folders
views contains html layout
contoller contains php or other data handling processes

2
common html parts seperates in to partials folder, inside of views folder
extract all function to seperate file

3
redirect all requests to index page through .htaccess

4
validate and load regarding to requested and server code pages from index page using the router

5
create database class and config file to store connection data

6
mysql security
access url parameters using $_GET
use prepared statments with post adders. ?
never directly use parameters in MYSQL queries due vulnerabilities

7
authentication. page view only for logged in user_id.
cofiguration constants store in Response.php class.

8
form validation class
static function direct call without objects

9
file name convension
folder heirachy
autoload required classes in public/index.php

10
namespace
works with php class autoloader class: spl_autoload_register
namespace is a virtual root folder system
define classes: namespace name;
use class from namespace: use namespace\class-name

11
one request, one controller
all requests catch by index.php
then, compare with pre initialized routes.
then, add appropriate method and redirect to the controller.

12
container class.
make easy to add(bind)/get(resolve) code blocks to repeat use.
eg: db class initialization on pages

13
App.php class
make container accessible from anywhere.
static method can access without initialization.

new:
$db = App::resolve(Database::class);
old:
$config = require base_path('config.php');
$db = new Database($config['database']);

used with update post mechanism

14
sessions + registration

15
middleware
use for authentication

16
adding Composer fependancy manager
it is a php class auto loader
required locations should define in composer.json
add entry point to index-> require BASE_PATH . '/vendor/autoload.php';
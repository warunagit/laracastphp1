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





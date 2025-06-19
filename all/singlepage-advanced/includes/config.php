<?php
ob_start();
session_start();

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','1234');
define('DBNAME','blogadvanced');

$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
date_default_timezone_set('Europe/London');

//load classes as needed
function my_autoloader($class) {

   $class = strtolower($class);

    //if call from within /assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }     

    //if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }

    //if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }         

}
spl_autoload_register('my_autoloader');
$user = new User($db); 
?>
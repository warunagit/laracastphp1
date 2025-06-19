<?php
$goToParent="";
function load_model($class_name)
{
	$path_to_file = $goToParent.'models/' . $class_name . '.php';

	if (file_exists($path_to_file)) {
		require $path_to_file;
	}
}

function load_service($service_name)
{
	$path_to_file = $goToParent.'services/' . $service_name . '.php';

	if (file_exists($path_to_file)) {
		require $path_to_file;
	}
}

function load_configuration($configuration_name)
{
	$path_to_file = $goToParent.'config/'. $configuration_name. '.php';

	if (file_exists($path_to_file)) {
		require $path_to_file;
	}
}
spl_autoload_register('load_model');
spl_autoload_register('load_service');
spl_autoload_register('load_configuration');

#https://www.phptutorial.net/php-oop/php-autoloading-class-files/
?>
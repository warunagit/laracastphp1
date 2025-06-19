<?php
//get functions including class-auto-loading
require 'functions.php';

//create new object. it will make by autoloading, without class required_once
$contact = new Contact('john.doe@example.com');
echo Email::send($contact);
?>
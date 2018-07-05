<?php 
require_once('config.php');
$dc_title = APP_NAME;
$dc_content = 'This is the content';

$dc_controller = 'PageController';
$dc_method = 'index';

if(isset($_GET['controller'])){
	$dc_controller = $_GET['controller'];
}

if(isset($_GET['method'])){
	$dc_method = $_GET['method'];
}
require_once('controllers/'.$dc_controller.'.php');

$dc_controller_obj = new $dc_controller;
$dc_controller_obj -> $dc_method();

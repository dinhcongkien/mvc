<?php
if(!defined('PATH_SYSTEM'))die ('<h1 style="text-align:center;color:red">Bad request.....</h1>');

function LG_load()
{	
	include_once(PATH_SYSTEM.'/core/LG_Controller.php');
	$config = include_once PATH_APPLICATION.'/config/init.php';
	$controller =empty($_GET['c'])?($config['default_controller']):$_GET['c'];
	$action = empty($_GET['a'])?($config['default_action']):$_GET['a'];
	$controller = ucfirst(strtolower($controller).'_Controller');
	$path_controller = PATH_APPLICATION.'/controller/'.$controller.'.php';
	$action = strtolower($action);
	if (!file_exists($path_controller)) 
	{
		die('The Controller does not exist');
	}
	require_once($path_controller);
	if(!class_exists($controller))
	{
		die('The Class does not exist');
	}

	$object = new $controller();
	if (!method_exists($object, $action)) 
	{
		die('The Action does not exist');
	}

	$object->$action();

}












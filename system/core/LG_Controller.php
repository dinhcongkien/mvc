<?php
class LG_Controller
{
	protected $view = '';
	protected $model = '';
	protected $library = '';
	protected $helper = '';
	protected $config = '';


	function __construct()
	{

	}

	public function index()
	{
		echo "INDEX";
	}
	public function load($controller, $action)
	{
		$controller = ucfirst(strtolower($controller).'_Controller');
		$path_controller = PATH_APPLICATION.'/controller/'.$controller.'.php';
		echo $path_controller;
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













}
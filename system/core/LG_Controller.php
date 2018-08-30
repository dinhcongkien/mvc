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
		require_once(PATH_SYSTEM.'/core/loader/LG_Config_Loader.php');
		$this->config = new LG_Config_Loader();
		$this->config->load('config');
	}

	public function index()
	{
		echo "INDEX";
	}














}
<?php 
class LG_Config_Loader
{
	protected $config =array();


	public function load($config)
	{
		if(file_exists(PATH_APPLICATION.'/config/'.$config.'.php'))
		{
			$config = include_once PATH_APPLICATION.'/config/'.$config.'.php';
			if (!empty($config)) 
			{
				foreach ($config as $key => $value) 
				{
					$this->config[$key] = $value;
				}
			}
		}

	}
	public function item($key,$default = '')
	{
		return isset($this->config[$key]) ? $this->config[$key] : $default;
	}


	// Hàm set config

	public function set_item($key,$value)
	{
		return $this->config[$key] = $value;
	}

}
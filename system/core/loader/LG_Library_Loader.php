<?php
class LG_Library_Loader
{

	public function load($library)
	{	
		$class = ucfirst($library).'_Library';
		require_once (PATH_SYSTEM.'/library/'.$class.'.php');
		$this->$library = new $class();
	}
}
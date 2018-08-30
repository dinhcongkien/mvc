<?php
if(!defined('PATH_SYSTEM'))die ('<h1 style="text-align:center;color:red">Bad request.....</h1>');
class New_Controller extends LG_Controller
{
	public function index()
	{
		echo '<pre>';
		print_r($this);
	}

	public function upload()
	{
		$this->library->load('upload');
		$this->library->upload->upload();
	}
}

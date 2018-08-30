<?php 
if(!defined('PATH_SYSTEM'))exit('<h1 style="text-align:center;color:red">Bad request.....</h1>');
class Upload_Library
{
	function __construct()
	{
		echo '<h1 style="text-align:center">Class Upload được khởi tạo</h1>';
	}


	 function upload()
	{
		echo '<h2 style="text-align:center;color:orange;">Method Upload  được gọi</h2>';
	}


}
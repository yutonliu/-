<?php
namespace Imooc;

class Factory
{	
	static public function get()
	{
		$db = new Database();
		return $db;
	}
}
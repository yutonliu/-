<?php
namespace Imooc;

class Factory
{	
	static public function get()
	{
		// $db = new Database();
		//单例模式
		$db = Database::getInstance();
		return $db;
	}
}
<?php
namespace Imooc;


class Database{
	//单例模式
	//受保护的成员属性
	protected static $db;
	//构造方法私有化
	private function __construct()
	{
		
	}
	static public function getInstance()
	{
		if(self::$db)
		{
			return self::$db;
		}else{
			self::$db = new Database;
			return self::$db;
		}
		
	}


	public function where($where)
	{
		return $this;
	}

	public function order($order)
	{
		return $this;
	}

	public function limit($limit)
	{	
		return $this;
	}


	public function _getMethod()
	{
		echo __METHOD__;
	}
}
<?php
namespace Imooc;
//注册模式
class Register
{
	protected static $object;
	static public function set($alias,$values)
	{
		self::$object[$alias] = $values;
	}

	static public function get($alias)
	{
		return self::$object[$alias];
	}

	static public function _unset($alias)
	{
		unset(self::$object[$alias]);
	}
}
<?php
namespace Imooc;

class Database{
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
<?php
namespace Imooc;

class Object
{
	static public function autoload($class)
	{
		require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
	} 
}
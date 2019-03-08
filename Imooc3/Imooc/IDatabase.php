<?php
namespace Imooc;

interface IDatabase
{
	//连接
	static public function connect($host,$user,$passwd,$dbname);
	//发送sql语句
	static public function query($sql);
	//关闭连接
	static public function close();
}
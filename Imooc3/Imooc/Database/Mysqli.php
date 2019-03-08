<?php

namespace Imooc\Database;

use Imooc\IDatabase;

class Mysqli implements IDatabase
{
	static protected  $conn;
	//连接
	static public  function connect($host,$user,$passwd,$dbname)
	{
		$conn = mysqli_connect($host,$user,$passwd,$dbname) or die ('Cannot open database');
		self::$conn = $conn;
	}
	//发送sql语句
	static public  function query($sql)
	{
		$res = mysqli_query(self::$conn,$sql);
		if ($res) {
	        $arr=$res->fetch_array();
	        return $arr;
	    }else{

	    	echo '查询出错！';

	    }

		// return $res;
	}
	//关闭连接
	static public function close()
	{
		mysqli_close(self::$conn);
	}

}
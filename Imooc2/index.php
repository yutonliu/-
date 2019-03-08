<?php
define('BASEDIR',__DIR__);

include BASEDIR.'/Imooc/Object.php';

spl_autoload_register('\\Imooc\\Object::autoload');

App\Controller\Home\Test1::test();
echo '<br />';
App\Controller\Home\Test2::test();

echo '<br />';

//php 链式操作
//正常操作
// $db = new Imooc\Database();
//单例模式
$db = Imooc\Database::getInstance();
// $db->where('id=1');
// $db->order('id desc');
// $db->limit('10');
// $db->where('id=1')->order('id desc')->limit('10');



echo '<br />';

//设计模式
//1.工厂模式 在工厂方法中实例化类
$db = Imooc\Factory::get();
// $db->_getMethod();

//2.单例模式 只能实例化一次  构造方法私有化
$db = Imooc\Database::getInstance();

//3.注册模式 全局配置 共享交换
$db = Imooc\Register::get('db1');

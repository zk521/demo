<?php
// 应用目录为当前目录
define('APP_PATH', __DIR__.DIRECTORY_SEPARATOR);
//echo APP_PATH;die;
// 开启调试模式
define('APP_DEBUG', true);
//截取
$uri = substr($_SERVER['REQUEST_URI'],1);
if(empty($_SERVER['HTTP_REFERER'])){
    $_SERVER['HTTP_REFERER'] =$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/';
}
//$name= substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
//$path = $_SERVER['HTTP_REFERER'].$name;
//echo $path;

//echo $name;die;
//print_r($path);die;

//print_r($_SERVER) ;die;
// 网站根URL
define('APP_URL', 'http://localhost/MV/');
//define('PUB_PATH',APP_URL.'Public/');
//$path = rtrim($_SERVER['HTTP_REFERER'],'/');
define('Path',$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME']);
define('_PHP_FILE_',rtrim($_SERVER['SCRIPT_NAME'],'/'));
$_root  =  rtrim(dirname(_PHP_FILE_),'/');
define('__ROOT__',  (($_root=='/' || $_root=='\\')?'':$_root));
define('PUB_PATH',Path.__ROOT__.'/public/');
//echo PUB_PATH;
// 加载框架
require './fastphp/Fastphp.php';

//对比  少了一个加载配置  一个实例化框架
<?php

// 初始化常量
defined('FRAME_PATH') or define('FRAME_PATH', __DIR__.'/');
defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
//$_SERVER['SCRIPT_FILENAME'] 反映的是当前执行程序的绝对路径及文件名
defined('APP_DEBUG') or define('APP_DEBUG', false);
defined('CONFIG_PATH') or define('CONFIG_PATH', APP_PATH.'config/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH.'runtime/');
defined('PUB_PATH') or define('PUB_PATH', APP_PATH.'Public/');
// 包含配置文件
require APP_PATH . 'config/config.php';

//包含核心框架类
require FRAME_PATH . 'Core.php';
// 实例化核心类
$fast = new Core;
$fast->run();
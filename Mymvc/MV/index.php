<?php

// 应用目录为当前目录
define('APP_PATH', __DIR__.'/');

// 开启调试模式
define('APP_DEBUG', true);

// 网站根URL

define('APP_URL', 'http://localhost/Mymvc/MV');

define('PUB_PATH', 'http://localhost/Mymvc/MV/Public'.'/');
// 加载框架
require './fastphp/Fastphp.php';


//对比  少了一个加载配置  一个实例化框架
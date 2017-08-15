<?php

//定义css、img、js常量
define("PROJECT_NAME", "乐政微官网");
//define("SITE_URL", "http://www.XXXX.com/LezhengWechat/"); //根目录位�?
define("SITE_URL", "/"); //根目录位�?
define("CSS_URL", SITE_URL . "./Public/Home/css/"); //css
define("IMG_URL", SITE_URL . "./Public/Home/img/"); //img
define("DEFAULTIMG_URL", SITE_URL . "./Public/Home/img/nopic.jpg"); //默认图片
define("JS_URL", SITE_URL . "./Public/Home/js/"); //js
define("UPLOAD_URL", SITE_URL . "./Public/upload/"); //upload
define("LIB_URL", SITE_URL . "./Public/lib/"); //css
define("DEFAULT_URL","http://www.joygov.com:8010/"); //css


function show_bug($msg) {
    echo "<pre style='color:red'>";
    print_r($msg);
    echo "</pre>";
}

//为上传图片设置路�?
define("IMG_UPLOAD", SITE_URL . "./Public/");

//把目前tp模式由生产模式变为开发调试模�?
define("APP_DEBUG", true);

// 定义应用目录
define('APP_PATH', './LezhengWechat/');

// 引入ThinkPHP入口文件
require './FrameWork/framework.php';

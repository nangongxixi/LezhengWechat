<?php /* Smarty version Smarty-3.1.6, created on 2017-03-27 16:49:25
         compiled from "./LezhengWechat/Home/View\Index\Telphone.html" */ ?>
<?php /*%%SmartyHeaderCode:613758ca05f1432d31-13784390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab35e0fecacb42766087f09a2c47318c82c802e9' => 
    array (
      0 => './LezhengWechat/Home/View\\Index\\Telphone.html',
      1 => 1490602103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613758ca05f1432d31-13784390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ca05f14b487',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ca05f14b487')) {function content_58ca05f14b487($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="乐政微官网" />
        <meta name="description" content="乐政微官网"/>
        <title>"乐政微官网"</title>
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css" />          
        <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
banner.js"></script>        

        <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-2.1.0.min.js"></script>
        <link rel="stylesheet" href="<?php echo @CSS_URL;?>
layer.css" />
        <script type="text/javascript" src="<?php echo @JS_URL;?>
fastclick.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
layer.js"></script>
        <!--图片上传-->
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/upload_js/jquery-2.0.3.min.js'></script>
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/upload_js/LocalResizeIMG.js'></script>
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/upload_js/patch/mobileBUGFix.mini.js'></script>
        <!--时间选择-->
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/timechoose.js'></script>       
        <link rel="stylesheet" href="<?php echo @CSS_URL;?>
timechoose.css" />        
    </head>
    <body style="background-color: #fff">	
		<div class="wxjump_pic"><img src="<?php echo @IMG_URL;?>
wxcode/rexian1.png"></div>
		<div class="wxjump_word">
			<div class="zixrex">咨询热线</div>
			<div class="xiaozi">点击“确认”将直接拨打乐政</div>
			<div class="xiaozi">咨询热线：<span class="lans">962562</span></div>
			
		</div>
		<div class="wxjump_button">
			<div class="wxjump_return"><img src="<?php echo @IMG_URL;?>
wxcode/rexian2.png" onclick="WeixinJSBridge.call('closeWindow');"></div>
			<div class="wxjump_sure"><a href="tel:962562"><img src="<?php echo @IMG_URL;?>
wxcode/rexian3.png" onclick="android_apkdownload();"></a></div>
			<div class="clear"></div>
		</div>
    </body>
</html>
<?php }} ?>
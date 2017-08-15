<?php /* Smarty version Smarty-3.1.6, created on 2017-03-27 15:43:20
         compiled from "./LezhengWechat/Home/View\Appdown\Turnindex.html" */ ?>
<?php /*%%SmartyHeaderCode:2543958d8beec450685-07669059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a77acaa98aec8b962f3e3e32614f46486b0ef2' => 
    array (
      0 => './LezhengWechat/Home/View\\Appdown\\Turnindex.html',
      1 => 1490600599,
      2 => 'file',
    ),
    '942f110b495b1fb48e10e9dc936729fb67b330e5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1490320098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2543958d8beec450685-07669059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58d8beec4ffe3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d8beec4ffe3')) {function content_58d8beec4ffe3($_smarty_tpl) {?><html>
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="乐政微官网" />
        <meta name="description" content="乐政微官网"/>
        <title>乐政微官网</title>
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
    <body >        
        

    <div class="contt">
        <div class="navstyle">
            <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>App下载
            <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
        </div>    
        <div class="appdown_bg"> 
            <img src="<?php echo @IMG_URL;?>
Android.jpg" class="appdown_box"> 
            <img src="<?php echo @IMG_URL;?>
Android.png" class="appdown_button" onclick="android_apkdownload();">
        </div>    
    </div>

    <script type="text/javascript">
        browser = {
            versions: function () {
                var u = navigator.userAgent, app = navigator.appVersion;
                return {//移动终端浏览器版本信息
                    trident: u.indexOf('Trident') > -1, //IE内核
                    presto: u.indexOf('Presto') > -1, //opera内核
                    webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                    gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                    mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                    android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                    iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                    iPad: u.indexOf('iPad') > -1, //是否iPad
                    ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                    webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                };
            }(),
            language: (navigator.browserLanguage || navigator.language).toLowerCase()
        };
        function isWeiXin() {
            var ua = window.navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == 'micromessenger') {
                return true;
            } else {
                return false;
            }
        }
        function android_apkdownload() {
            if (isWeiXin()) {
                $("#a_android_load").attr("href") == '#';
                alert("请点击右上角的【…】，选择【在浏览器打开】进行下载");
            } else {
                $("#a_android_load").attr("href", "https://at.umeng.com/nGrGza");
            }
        }
        function iphone_apkdownload() {
            if (isWeiXin()) {
                $("#a_iphone_load").attr("href") == '#';
                alert("请点击右上角的【…】，选择【在浏览器打开】进行下载");
            } else {
                $("#a_iphone_load").attr("href", "https://at.umeng.com/ObiKji");
            }
        }
    </script>

    
        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
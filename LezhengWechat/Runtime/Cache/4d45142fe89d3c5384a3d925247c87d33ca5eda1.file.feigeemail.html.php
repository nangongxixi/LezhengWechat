<?php /* Smarty version Smarty-3.1.6, created on 2017-02-16 16:48:34
         compiled from "./LezhengWechat/Home/View\Myinfo\feigeemail.html" */ ?>
<?php /*%%SmartyHeaderCode:1656858a2ad04cb9734-92901340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d45142fe89d3c5384a3d925247c87d33ca5eda1' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\feigeemail.html',
      1 => 1487234905,
      2 => 'file',
    ),
    '7cd070b2ce1d1a1ea7322d1a9f1682c7662c769a' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\Feigenull.html',
      1 => 1487056517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656858a2ad04cb9734-92901340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a2ad04e99f2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a2ad04e99f2')) {function content_58a2ad04e99f2($_smarty_tpl) {?><html>
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
    <body class='feigenull_bg'>        
        
<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>个人中心
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div> 
    <!--
    <img src="<?php echo @IMG_URL;?>
feigeemail.png" class="">    
    -->
</div>
<SCRIPT type="text/javascript">
    $(function () {
        //点击具体部门的时候
        $(".feigenull_bg").on("click", function () {
            location.href = "../myinfo/orderlist";
        });
    });
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-02-16 16:49:02
         compiled from "./LezhengWechat/Home/View\Myinfo\successpingj.html" */ ?>
<?php /*%%SmartyHeaderCode:1328458a4099fe1c3b5-34431977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4034de2b953095f0a64df251cc29053e3145b647' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\successpingj.html',
      1 => 1487148363,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1486963340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328458a4099fe1c3b5-34431977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a409a004d18',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a409a004d18')) {function content_58a409a004d18($_smarty_tpl) {?><html>
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
    <body >        
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>评价成功
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="submitsuccess success_sty">
        <img src="<?php echo @IMG_URL;?>
gongnengpic.png">        
    </div>
    <div class="submitsuccess_text success_top"><span class="success_red">评价成功啦~</span> <br>您的建议就是对我们最大的支持！ </div>       
</div>
<div class="submit_button" id="submit">确认</div>

<SCRIPT type="text/javascript">
    $(function () {
        var areaval = sessionStorage.getItem('itemid');
        $("#" + areaval).attr("class", "").addClass("area_selectitemred");
    });
    $("#submit").on("click", function () {        
        location.href = "../myinfo/Tuikuansq";
    });
</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
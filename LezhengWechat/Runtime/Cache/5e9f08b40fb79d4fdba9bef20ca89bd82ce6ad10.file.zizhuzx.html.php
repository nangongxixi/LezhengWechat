<?php /* Smarty version Smarty-3.1.6, created on 2017-03-21 15:44:52
         compiled from "./LezhengWechat/Home/View\Index\zizhuzx.html" */ ?>
<?php /*%%SmartyHeaderCode:2419058bd17139c3c34-14062521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9f08b40fb79d4fdba9bef20ca89bd82ce6ad10' => 
    array (
      0 => './LezhengWechat/Home/View\\Index\\zizhuzx.html',
      1 => 1490082290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2419058bd17139c3c34-14062521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd1713b0417',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd1713b0417')) {function content_58bd1713b0417($_smarty_tpl) {?><html>
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
    <body class="baibg"> 
        <div class="contt">		
            <div class="navstyle">
                <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>自助咨询
                <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
            </div>
            <div class="">
                <div class="zhizzx">
                    <div class="submitsuccess_text zhizzx_pos">
                        <div class="zhizzx_text">自助咨询</div>
                        点击“确定”将回到微信公众号对话界面，<br>						
                        您可以直接与我们的机器人进行对话。
                    </div>
                    <div class="submit_button zhizzx_button" onclick="WeixinJSBridge.call('closeWindow');">确定</div>
                </div> 
            </div>    
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html><?php }} ?>
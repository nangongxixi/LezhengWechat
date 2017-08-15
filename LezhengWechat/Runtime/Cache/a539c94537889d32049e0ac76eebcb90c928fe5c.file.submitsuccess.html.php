<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 13:57:12
         compiled from "./LezhengWechat/Home/View\Epsquery\submitsuccess.html" */ ?>
<?php /*%%SmartyHeaderCode:1632858a155d2ec3af4-76433713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a539c94537889d32049e0ac76eebcb90c928fe5c' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\submitsuccess.html',
      1 => 1489135941,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1632858a155d2ec3af4-76433713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a155d320600',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a155d320600')) {function content_58a155d320600($_smarty_tpl) {?><html>
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
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?> 
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>提交成功
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg message_kongge">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">订单说明：</div>
            <div class="clear"></div> 
        </div>
        <div class="input_padd input_paddmin">
            <div class="all_text left input_title " id="message">
                1.您的订单正在生成中，我们的客服人员将及时与您联系核对信息，完成核对后订单将会生成，您也可以拨打客服人员电话与之取得联系；<br>
                2.订单生成后，可在我的订单中进行支付；<br>
                3.可点击“确定”按钮进入“我的订单”；
            </div>             
            <div class="clear"></div> 
        </div>         
    </div> 
    <div class="conntbottom_line"></div>
    <div class="baibg all_padd all_text input_title mianzxy success_box">
        如果您有任何问题，可与我们联系！
        <a href="tel:962562">
            <div>
                <img src="<?php echo @IMG_URL;?>
tel.png" class="tel_ico">
                <span class="success_tel">962562</span>
            </div>
        </a>
    </div>
</div>
<div class="conntbottom_line"></div>
<div class="submit_button" id="submit" onclick="">确定</div>

<SCRIPT type="text/javascript">  
    $("#submit").on("click", function () { 
		location.href = "../myinfo/orderlist";
    });
</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
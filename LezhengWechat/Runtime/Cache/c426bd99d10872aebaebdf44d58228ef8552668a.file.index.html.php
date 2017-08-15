<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 11:25:29
         compiled from "./LezhengWechat/Home/View\Appointment\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3015058a25aae6ee956-84583990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c426bd99d10872aebaebdf44d58228ef8552668a' => 
    array (
      0 => './LezhengWechat/Home/View\\Appointment\\index.html',
      1 => 1490671470,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3015058a25aae6ee956-84583990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a25aae8fa0d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a25aae8fa0d')) {function content_58a25aae8fa0d($_smarty_tpl) {?><html>
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
return.png"></a>预约说明
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg mianzexy_padd input_title">
        <strong>预约规则说明：</strong><br>
        &nbsp;&nbsp;&nbsp;&nbsp;1, 同一身份证只能预约一次，在预定时间、事项失效前不能再进行预约；<br>
        &nbsp;&nbsp;&nbsp;&nbsp;2, 预约为第二天办理时间，周五无法预约（周六休息日）；<br>
        &nbsp;&nbsp;&nbsp;&nbsp;3, 预约成功后，凭身份证在政务大厅自助终端取号；<br>
        &nbsp;&nbsp;&nbsp;&nbsp;4, 累计5次预约成功但未到场办理的，将无法再使用预约功能；<br><br>
        <strong>时间规则说明：</strong><br>
        &nbsp;&nbsp;&nbsp;&nbsp;1, 预约成功后，请在预约时间结束前15分钟完成取号，过期将无法取号；<br>
        &nbsp;&nbsp;&nbsp;&nbsp;2, 预约成功后，无法在当天完成取号，预约排号系统次日凌晨更新预约数据；<br>
    </div>
    <div class="bottom_line"></div>
    <div class="submit_button" id="submit">下一步</div>
	<?php if ($_SESSION['returnindex']['appointment']=='true'){?>
		<div class="return_index" id="return_index"></div>
	<?php }?>
	<?php echo session("returnindex.appointment",null);?>
	
</div>
<script type="text/javascript">
    $("#submit").on("click", function () {		
        location.href = "../appointment/bumenlist";
    });
</script>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
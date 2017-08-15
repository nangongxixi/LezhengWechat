<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 10:27:46
         compiled from "./LezhengWechat/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:70558a5442c4e39d0-61878961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1a1236d6ed675dd48c59d7eaad68df27d2300f' => 
    array (
      0 => './LezhengWechat/Home/View\\Index\\index.html',
      1 => 1490668065,
      2 => 'file',
    ),
    '3ef9d6077c4499a7789d9ddf900d068898bc71f5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\Index_head.html',
      1 => 1490320119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70558a5442c4e39d0-61878961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a5442c79af8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5442c79af8')) {function content_58a5442c79af8($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
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
    <body class="index_bg"> 
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?> 
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>首页
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <img src="<?php echo @IMG_URL;?>
index_topimg.jpg" class="index_topimg">
    <div class="index_positona">
        <div class="index_box1">
            <img src="<?php echo @IMG_URL;?>
person.png" class="index_personico left" id="person">
            <img src="<?php echo @IMG_URL;?>
help.png" class="index_helpico right" id="help">
            <div class="clear"></div>
        </div>         
        <div class="index_box2">             
            <div><img src="<?php echo @IMG_URL;?>
position.png" class="index_positionico left"> </div>
            <div class="index_positionname left" id="area">选择区域</div>
            <div class="clear"></div> 
        </div>
        <div class="index_blackbg index_box3" id="dialog">请用一句话描述您的问题…</div>
    </div>    
    <div id="gerensx" class="index_icobox"><img src="<?php echo @IMG_URL;?>
index_ico1.png" class="index_icoimg"><div class="index_icobox_text">个人事项</div></div>
    <div id="qiyeyw" class="index_icobox"><img src="<?php echo @IMG_URL;?>
index_ico2.png" class="index_icoimg"><div class="index_icobox_text">企业业务</div></div>
    <div id="shixiangcx" class="index_icobox index_icobox_right"><img src="<?php echo @IMG_URL;?>
index_ico3.png" class="index_icoimg"><div class="index_icobox_text">事项查询</div></div>
    <div id="rengongzx" class="index_icobox"><img src="<?php echo @IMG_URL;?>
index_ico4.png" class="index_icoimg"><div class="index_icobox_text">人工咨询</div></div>
    <div id="zizhuzx" class="index_icobox"><img src="<?php echo @IMG_URL;?>
index_ico5.png" class="index_icoimg"><div class="index_icobox_text">自助咨询</div></div>
    <div id="yuyue" class="index_icobox index_icobox_right"><img src="<?php echo @IMG_URL;?>
index_ico6.png" class="index_icoimg"><div class="index_icobox_text">预约</div></div>
    <div class="index_icobox"><a href="tel:962562"><img src="<?php echo @IMG_URL;?>
index_ico7.png" class="index_icoimg"><div class="index_icobox_text">咨询热线</div></a></div>
    <div id="gongnengjx" class="index_icobox"><img src="<?php echo @IMG_URL;?>
index_ico8.png" class="index_icoimg"><div class="index_icobox_text">功能介绍</div></div>
    <div id="wodelz" class="index_icobox index_icobox_right"><img src="<?php echo @IMG_URL;?>
index_ico9.png" class="index_icoimg"><div class="index_icobox_text">我的乐政</div></div>
    <div id="qiyeyw" class="clear"></div>
</div> 
<div><img src="<?php echo @IMG_URL;?>
index_botomtext.png" class="index_botomtext"></div>

<SCRIPT type="text/javascript">
		$(function () {
		
        var area = "<?php echo $_SESSION['area'];?>
"; 
//alert(area);		
        if (area != null) {
            $("#area").html(area);
        }
		if (area == '') {
            $("#area").html("请选择");
        }
			
		
		$("#dialog").on("click", function () {
            location.href = "../index/dialog";
        });
        $("#person").on("click", function () {
            location.href = "../myinfo/index";
        });
        $("#help,#gongnengjx").on("click", function () {
            location.href = "../workIntroduced/index";
        });
        $("#area").on("click", function () {
            location.href = "../need/AreaSelect";
        });
        $("#gerensx").on("click", function () {
            location.href = "../need/Personal";
        });
        $("#qiyeyw").on("click", function () {
            location.href = "../need/business";
        });
        $("#shixiangcx").on("click", function () {
            location.href = "../epsquery/index";
        });		
        $("#rengongzx").on("click", function () {
            location.href = "../index/dialog";
        });        
        $("#zizhuzx").on("click", function () {
            location.href = "../index/zizhuzx";
        });
        $("#yuyue").on("click", function () {
            location.href = "../Appointment/index";
        });
        $("#wodelz").on("click", function () {
            location.href = "../myinfo/index";
        });
        var area = "<?php echo $_SESSION['area'];?>
";
        if (area == null){
            layer.open({
                    content: '请选择区域',                    
                    shadeClose: false,
                    btn: ['OK'],
                    yes:function(){
                        location.href = "../need/areaselect"; 
                    }
                });
                return false;
           
        }
    });
	
</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
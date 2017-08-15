<?php /* Smarty version Smarty-3.1.6, created on 2017-03-27 17:14:28
         compiled from "./LezhengWechat/Home/View\Appointment\zhengjianselect.html" */ ?>
<?php /*%%SmartyHeaderCode:2778158abe0e114d179-84160972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3fb926ce73bf308468ce7bf289d1d09d4291aa' => 
    array (
      0 => './LezhengWechat/Home/View\\Appointment\\zhengjianselect.html',
      1 => 1488940005,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778158abe0e114d179-84160972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58abe0e12d3bd',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58abe0e12d3bd')) {function content_58abe0e12d3bd($_smarty_tpl) {?><html>
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
return.png"></a>证件类型
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>      
    <div class="all_padd input_itemselect">        
        <div id="areainfo">
            <div class="area_selectitem" onclick="" id="1">身份证</div>
        </div>
        <div class="clear"></div>
    </div>    
</div>

<SCRIPT type="text/javascript">
    //保存被点击的值并跳转到上一页    
    $(function () {
       
    });

    //点击选项并保存项目
    $(document).on("click", ".area_selectitem", function () {
        var zhengjianName = $(this).html();
        var zhengjianID = $(this).attr("id");
        //var areaid = $(this).attr("id");
        sessionStorage.setItem('zhengjianName', zhengjianName);
        sessionStorage.setItem('zhengjianID', zhengjianID);
        //sessionStorage.setItem('areaid', areaid);
        self.location=document.referrer;
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
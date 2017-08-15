<?php /* Smarty version Smarty-3.1.6, created on 2017-03-08 11:59:34
         compiled from "./LezhengWechat/Home/View\Epsquery\morepinglun.html" */ ?>
<?php /*%%SmartyHeaderCode:1115458bf806537c1e7-80138167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f371acd6f8f693e6db472e369637bef348fa29f2' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\morepinglun.html',
      1 => 1488945572,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1488354145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1115458bf806537c1e7-80138167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bf806554144',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf806554144')) {function content_58bf806554144($_smarty_tpl) {?><html>
    <head>
        <meta charset="UTF-8" />
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
return.png"></a>用户评论
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>    
    <div class="baibg all_text all_padd">
        <div id="yonghuDP"></div>
    </div>
    <div class="bottom_line"></div>
</div>

<SCRIPT type="text/javascript">
    $(function () {
        //获取“评论”
        var shixiangcode = sessionStorage.getItem('shixiangcode');
        $.ajax({
            type: "POST",
            url: "../Epsquery/YonghuDPAction",
            data: {
                "page": 1,
                "shixiangcode": shixiangcode
            },
            success: function (msg) {
                $("#yonghuDP").html("");
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {                        
                    $("#yonghuDP").prepend('<div class="pingjia_box"><div class="left pingjia_left"><img src="' + data.datalist[i].picurl + '" class="userheadimg"></div><div class="right pingjia_right"><div class="pingjia_title right"><span class="left">' + data.datalist[i].nickname + '</span><span class="right pingjia_date">' + data.datalist[i].commentstime + '</span></div><div class="clear"></div><div class="pingjia_content right">' + data.datalist[i].contents + '</div></div></div><div class="clear"></div>');
                });
            }
        });
    });
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-23 11:40:30
         compiled from "./LezhengWechat/Home/View\Epsquery\morePinglun.html" */ ?>
<?php /*%%SmartyHeaderCode:2111758c247908ec422-66682451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4d9df0314ef46f5313ff1af9867ad758a5bc28' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\morePinglun.html',
      1 => 1490230931,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1488524575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111758c247908ec422-66682451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c2479096655',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c2479096655')) {function content_58c2479096655($_smarty_tpl) {?><html>
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
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?> 
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>用户评论
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>    
    <div class="baibg all_text all_padd" style="padding:3.5% 0">
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
					var imgico = "<?php echo @DEFAULT_URL;?>
api/v1/Files?filename="+data.datalist[i].picurl;
					if(data.datalist[i].picurl == null || data.datalist[i].picurl == ''){
						imgico = "<?php echo @IMG_URL;?>
toux.png";
					}
                    $("#yonghuDP").prepend('<div class="pingjia_box"><div class="left pingjia_left"><img src="' + imgico + '" class="userheadimg setinfo_headimg pingjiahead"></div><div class="right pingjia_right"><div class="pingjia_title right"><span class="left">' + data.datalist[i].nickname + '</span><span class="right pingjia_date">' + data.datalist[i].commentstime + '</span></div><div class="clear"></div><div class="pingjia_content right">' + data.datalist[i].contents + '</div></div></div><div class="clear"></div><div class="bottom_line pingjialine"></div><div class="clear"></div>');
                });
            }
        });
    });
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-04-14 17:39:12
         compiled from "./LezhengWechat/Home/View\Myinfo\modysex.html" */ ?>
<?php /*%%SmartyHeaderCode:2366358ad32815f9854-36778140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc716a7d794072eb876bb0d61357312a47f069e' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\modysex.html',
      1 => 1488939894,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2366358ad32815f9854-36778140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ad32817d234',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad32817d234')) {function content_58ad32817d234($_smarty_tpl) {?><html>
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
return.png"></a>修改性别
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>    
    <div class="baibg all_padd">
        <div class="input_padd">            
            <span class="input_title">请选择性别&nbsp;&nbsp;&nbsp;</span>
            <input type="radio" name="radiobutton" value="1" <?php if ($_SESSION['user']['gender']==1){?>checked<?php }?>> 女&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" name="radiobutton" value="0" <?php if ($_SESSION['user']['gender']==0){?>checked<?php }?>> 男
        </div>              
    </div>       
    <div class="bottom_line"></div> 
    <div class="submit_button">确认</div>
</div>   
<SCRIPT type="text/javascript">
    $(function () {
        $(".submit_button").click(function () {
            var sex = $('input:radio:checked').val();
            $.ajax({
                type: "POST",
                url: "../myinfo/modymyinfoaction",
                data: {
                    "sex": sex
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    if ('1' == data.result) {
                        layer.open({
                            content: '操作成功',                           
                            shadeClose: true,
                            time: 1,
                            end: function () {
                                location.href = "../myinfo/setinfo";
                            }
                        });
                    }
                }
            });
        });
    });
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-23 13:19:17
         compiled from "./LezhengWechat/Home/View\Myinfo\modynicheng.html" */ ?>
<?php /*%%SmartyHeaderCode:1788358ad28858e6ce7-99721512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7911a87cdf819ac7cd3e18aeba035db797a0aa0f' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\modynicheng.html',
      1 => 1490246337,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1488524575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788358ad28858e6ce7-99721512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ad2885a1b6a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2885a1b6a')) {function content_58ad2885a1b6a($_smarty_tpl) {?><html>
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
return.png"></a>修改昵称
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>   
    <div class="baibg all_padd">
        <div class="input_padd">
            <span class="input_title">昵称</span>            
            <input type="text" name="name" value="<?php echo $_SESSION['user']['name'];?>
" id="name" maxlength="50" class="input_box all_tex address_input"/>
            <div class="name" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>              
    </div>       
    <div class="bottom_line"></div> 
    <div class="submit_button">确认</div>
</div>   
<SCRIPT type="text/javascript">
    $(function () {
        $("#modyadd").click(function () {
            $(this).css("display", "none");
            $("#name").css("display", "block");
            var addval = $(this).html();
            $("#name").val(addval).focus();
        });
        //地址
        $(".name").click(function () {
            $("#name").val('');
            sessionStorage.removeItem('name');
            $(".name").css("display", "none");			
        });
        $("#name").focus(function () {
			$("#name").css("text-align","left");
            var name = $("#name").val();
            if (name != '') {
                $(".name").css("display", "block");
            } else {
                $(".name").css("display", "none");
            }
        });
        $("#name").keyup(function () {
            var name = $("#name").val();
            sessionStorage.setItem('name', name);
            if (name != '') {
                $(".name").css("display", "block");
            } else {
                $(".name").css("display", "none");
            }
        });
		
        //点击确认
        $(".submit_button").click(function () {
			var name = $.trim($("#name").val());
            if (name == '') {
                layer.open({
                    content: '昵称不能为空',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../myinfo/modymyinfoaction",
                data: {
                    "name": name
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
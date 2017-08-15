<?php /* Smarty version Smarty-3.1.6, created on 2017-02-13 16:41:11
         compiled from "./LezhengWechat/Home/View\Login\Regist.html" */ ?>
<?php /*%%SmartyHeaderCode:602358a16817966983-78737283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058da67cc716d7a7c010ab45cb6a34413324fdf1' => 
    array (
      0 => './LezhengWechat/Home/View\\Login\\Regist.html',
      1 => 1486975232,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1486963340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '602358a16817966983-78737283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a16817ba8c0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a16817ba8c0')) {function content_58a16817ba8c0($_smarty_tpl) {?><html>
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
return.png"></a>注册
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd bottom_line">
            <span class="input_title">用户名：</span>&nbsp;&nbsp;&nbsp; <input type="text" name="people" value="" placeholder="4-12位英文或数字" id="people" maxlength="11" class="input_box all_tex"/>
            <div class="people" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>
        <div class="input_padd bottom_line">
            <span class="input_title">手机号码：</span>&nbsp;<input type="text" name="phone" value="" placeholder="注册后不可更改" id="phone" maxlength="11" class="input_box all_tex"/>
            <div class="phone" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div> 
        <div class="input_padd">
            <span class="input_title">验证码：</span>&nbsp;&nbsp;&nbsp; <input type="text" name="vricode" value="" placeholder="请输入验证码" id="vricode" maxlength="11" class="input_box all_tex"/>
            <div class="vricode" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput vricode_del"></div>
            <div class="clear"></div>
            <div class="getvricode">获取验证码</div>           
            <div class="getvricode getvricode_time" style="display: none"><span id="daojishi">60</span> S</div>  
            <div class="clear"></div>
        </div>
    </div>   
    <div class="conntbottom_line"></div>
    <div class="clear"></div>
    <div class="submit_buttonhui">下一步</div>
</div>
<SCRIPT type="text/javascript">
    //删除输入,隐藏删除图标
    $(".people").click(function () {
        $("#people").val('');
        sessionStorage.removeItem('people');
        $(".people").css("display", "none");
    });
    $("#people").focus(function () {
        var people = $("#people").val();
        if (people != '') {
            $(".people").css("display", "block");
        } else {
            $(".people").css("display", "none");
        }
    });
    $("#people").keyup(function () {
        var people = $("#people").val();
        sessionStorage.setItem('people', people);
        if (people != '') {
            $(".people").css("display", "block");
        } else {
            $(".people").css("display", "none");
        }
    });
    //电话
    $(".phone").click(function () {
        $("#phone").val('');
        sessionStorage.removeItem('phone');
        $(".phone").css("display", "none");
    });
    $("#phone").focus(function () {
        var phone = $("#phone").val();
        if (phone != '') {
            $(".phone").css("display", "block");
        } else {
            $(".phone").css("display", "none");
        }
    });
    $("#phone").keyup(function () {
        var phone = $("#phone").val();
        sessionStorage.setItem('phone', phone);
        if (phone != '') {
            $(".phone").css("display", "block");
        } else {
            $(".phone").css("display", "none");
        }
    });
    //地址
    $(".vricode").click(function () {
        $("#vricode").val('');
        sessionStorage.removeItem('vricode');
        $(".vricode").css("display", "none");
    });
    $("#vricode").focus(function () {
        var vricode = $("#vricode").val();
        if (vricode != '') {
            $(".vricode").css("display", "block");
        } else {
            $(".vricode").css("display", "none");
        }
    });
    $("#vricode").keyup(function () {
        var vricode = $("#vricode").val();
        sessionStorage.setItem('vricode', vricode);
        if (vricode != '') {
            $(".vricode").css("display", "block");
        } else {
            $(".vricode").css("display", "none");
        }
    });

    //删除表单值
    $(".delinput").on("click", function () {
        $(".submit_button").attr("class", "").addClass("submit_buttonhui");
    });
    //输入后的按钮颜色    
    $("input,textarea").on("keyup", function () {
        var people = $("#people").val();
        var phone = $("#phone").val();
        var vricode = $("#vricode").val();
        if (people !== '' && phone !== '' && vricode !== '') {
            $(".submit_buttonhui").attr("class", "").addClass("submit_button");
        } else {
            $(".submit_button").attr("class", "").addClass("submit_buttonhui");
        }
    });
    $(function () {
        //点击提交按钮时
        $(document).on("click", ".submit_button", function () {
            var phone = $("#phone").val();
            if (phone == '' || phone.length < 11) {
                layer.open({
                    content: '请输入正确的手机号',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            location.href = "../need/surepersonal";
        });
    });



</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
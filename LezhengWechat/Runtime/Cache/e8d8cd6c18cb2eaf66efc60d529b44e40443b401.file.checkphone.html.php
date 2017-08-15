<?php /* Smarty version Smarty-3.1.6, created on 2017-03-29 09:19:52
         compiled from "./LezhengWechat/Home/View\Login\checkphone.html" */ ?>
<?php /*%%SmartyHeaderCode:1454058a17a851c0e11-23917509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8d8cd6c18cb2eaf66efc60d529b44e40443b401' => 
    array (
      0 => './LezhengWechat/Home/View\\Login\\checkphone.html',
      1 => 1490254271,
      2 => 'file',
    ),
    '942f110b495b1fb48e10e9dc936729fb67b330e5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1490320098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454058a17a851c0e11-23917509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a17a853dfe1',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a17a853dfe1')) {function content_58a17a853dfe1($_smarty_tpl) {?><html>
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
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>手机验证
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">        
        <div class="input_padd bottom_line">
            <span class="input_title">手机号码：</span>&nbsp;<input type="text" name="phone" value="" placeholder="注册时留下的手机号码" id="phone" maxlength="11" class="input_box all_tex"/>
            <div class="phone" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div> 
        <div class="input_padd">
            <span class="input_title">验证码：</span>&nbsp;&nbsp;&nbsp; <input type="text" name="vricode" value="" placeholder="请输入验证码" id="vricode" maxlength="11" class="input_box all_tex"/>
            <div class="vricode" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput vricode_del"></div>
            <div class="clear"></div>
            <div class="getvricode" id="getcode" style="margin-top:7px">获取验证码</div>           
            <div class="getvricode getvricode_time" style="display: none;margin-top:7px"><span id="daojishi">60</span> S</div>  
            <div class="clear"></div>
        </div>
    </div>   
    <div class="conntbottom_line"></div>   
    <div class="submit_buttonhui" onclick="">下一步</div>
</div>
<SCRIPT type="text/javascript">
    //删除输入,隐藏删除图标 
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
    //验证码
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
		//默认电话
		var tel = "<?php echo $_SESSION['user']['phonenumber'];?>
";
		if(tel){
			$("#phone").val(tel);
			$("#phone").val($("#phone").val().substring(0, 3) + "****" + $("#phone").val().substring(7, 11));			
			$("#phone").attr("onclick","javascript:$(this).blur()");
			$(".phone").html("");
		}	
        //验证码倒计时
        $("#getcode").on("click", function () {
			if(tel){
				var phone = $.trim(tel);   
			}else{
				var phone = $.trim($("#phone").val());   
			}                    
            if (phone == '' || phone.length < 11 || isNaN(phone)) {
                layer.open({
                    content: '请输入正确的手机号',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            //请求数据			
            $.ajax({
                type: "POST",
                url: "../login/SendVricode",
                data: {
                    "phone": phone,
                    "actionname": "checkphone"
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    if ('没有错误' == data.error.msg) {
                        layer.open({
                            content: '发送成功',
                            time: 2,
                            shadeClose: true
                        });
                        //验证码倒计时
                        var phoneyz = $("#phoneyz").val();
                        if (phoneyz != '') {
                            $("#getverify").css("display", "none");
                            setTimeout(jishiqi, 1000);
                            function jishiqi() {
                                var dd = $("#daojishi").html();
                                dd = dd - 1;
                                $("#daojishi").html(dd);
                                if (dd == 0) {
                                    $("#getcode").css("display", "block");
                                    $(".getvricode_time").css("display", "none");
                                    $("#getcode").html("重新获取");
                                    $("#daojishi").html("60");
                                }
                                if (dd > 0) {
                                    $("#yanze").css("display", "inline");
                                    $("#submit2").css("display", "block");
                                    $("#submithui").css("display", "none");
                                    setTimeout(jishiqi, 1000);
                                }
                            }
                            $("#getcode").css("display", "none");
                            $(".getvricode_time").css("display", "block");
                        }
                    } else {
                        layer.open({
                            content: data.error.msg,
                            time: 1,
                            shadeClose: true
                        });
                    }
                }
            });
        });
        $(document).on("click", ".submit_button", function () {
            if(tel){
				var phone = $.trim(tel);   
			}else{
				var phone = $.trim($("#phone").val());   
			}
            var vricode = $.trim($("#vricode").val());
            sessionStorage.setItem('phone',phone);
            //点击提交按钮时
            $.ajax({
                type: "POST",
                url: "../login/CheckVricode",
                data: {
                    "phone": phone,
                    "vricode": vricode
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    if ('没有错误' == data.error.msg) {
                        location.href = "../login/resetpwd";
                    } else {
                        layer.open({
                            content: data.error.msg,
                            time: 2,
                            shadeClose: true
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
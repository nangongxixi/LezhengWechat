<?php /* Smarty version Smarty-3.1.6, created on 2017-04-01 10:22:57
         compiled from "./LezhengWechat/Home/View\Login\BindWX.html" */ ?>
<?php /*%%SmartyHeaderCode:1208358df0bd7860f60-85790591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8cce652d79392cc4ae1f1d20a4f71d0432fdf7b' => 
    array (
      0 => './LezhengWechat/Home/View\\Login\\BindWX.html',
      1 => 1491013375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208358df0bd7860f60-85790591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58df0bd799228',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df0bd799228')) {function content_58df0bd799228($_smarty_tpl) {?><html>
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
    <body style="background-color: #fff">
        <div class="contt">
            <div class="navstyle">
                <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>邦定微信
                <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
            </div>
            <div class="submitsuccess submitsuccess_width">
                <img src="<?php echo @IMG_URL;?>
qt-logo.png">        
            </div>
            <div class="bindwx">		          
                <div class="input_padd bottom_line baibg bindwx_border">
                    <input type="text" name="phone" value="" placeholder="用户名/手机号码" id="phone" maxlength="20" class="input_box all_tex input_bg"/>
                    <img src="<?php echo @IMG_URL;?>
user.png" class="loginico">
                    <div class="phone" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                </div>        
                <div class="input_padd bottom_line baibg bindwx_border">
                    <input type="password" name="pwd" value="" placeholder="请输入6-20位密码" id="pwd" maxlength="20" class="input_box all_tex"/>
                    <img src="<?php echo @IMG_URL;?>
mima.png" class="loginico">
                    <div class="pwd" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>            
                </div>		 
                <div id="yanz"><img src="<?php echo @IMG_URL;?>
bindwx.png" class="bindwxbtn"></div>
            </div>    
        </div>
        
        <SCRIPT type="text/javascript">
            $("#yanz").on("click", function () {
                var pwd = $.trim($("#pwd").val());
                var phone = $("#phone").val();
				if (phone.match(/^((0\d{2,3}-\d{7,8})|(1[3584]\d{9}))$/ig)) {
                } else {
                    layer.open({
                        content: '请输入正确的手机号',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                }
                if (pwd.match(/^(?![^a-zA-Z]+$)(?!\D+$).{6,16}$/ig)) {
                } else {
                    layer.open({
                        content: '请输入6-16位密码（字母+数字）',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                }                
            });
        </SCRIPT>
        
        <SCRIPT type="text/javascript">
            //删除输入,隐藏删除图标   
            //预约人
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
            //密码
            $(".pwd").click(function () {
                $("#pwd").val('');
                sessionStorage.removeItem('pwd');
                $(".pwd").css("display", "none");
            });
            $("#pwd").focus(function () {
                var pwd = $("#pwd").val();
                if (pwd != '') {
                    $(".pwd").css("display", "block");
                } else {
                    $(".pwd").css("display", "none");
                }
            });
            $("#pwd").keyup(function () {
                var pwd = $("#pwd").val();
                sessionStorage.setItem('pwd', pwd);
                if (pwd != '') {
                    $(".pwd").css("display", "block");
                } else {
                    $(".pwd").css("display", "none");
                }
            });
            //删除表单值
            $(".delinput").on("click", function () {
                $(".submit_button").attr("class", "").addClass("submit_buttonhui");
            });
            //输入后的按钮颜色    
            $("input,textarea").on("keyup", function () {
                var phone = $("#phone").val();
                var pwd = $("#pwd").val();
                if (phone !== '' && pwd !== '') {
                    $(".submit_buttonhui").attr("class", "").addClass("submit_button");
                } else {
                    $(".submit_button").attr("class", "").addClass("submit_buttonhui");
                }
            });

            $(function () {
                /*
                 var areacode = sessionStorage.getItem('areacode');
                 if (areacode) {
                 location.href = "../index/index";
                 }
                 */
                //默认填入账号密码
                var phone = "<?php echo $_SESSION['user']['phonenumber'];?>
";
                var pwd = "<?php echo $_SESSION['user']['pwd'];?>
";
                $("#phone").val(phone);
                $("#pwd").val(pwd);
                $("#regist").on("click", function () {
                    location.href = "../login/regist";
                });
                $("#forgetpwd").on("click", function () {
                    location.href = "../login/checkphone";
                });

                //输入后的按钮颜色    
                var phone = $("#phone").val();
                var pwd = $("#pwd").val();
                if (phone !== '' && pwd !== '') {
                    $(".submit_buttonhui").attr("class", "").addClass("submit_button");
                } else {
                    $(".submit_button").attr("class", "").addClass("submit_buttonhui");
                }

            });
            //点击登录按钮
            $(document).on("click", ".bindwxbtn", function () {
                var phone = $.trim($("#phone").val());
                var pwd = $.trim($("#pwd").val());
                /*
                 if (phone.length < 6 || phone.length > 30 || phone.match(/[^A-Za-z0-9]/ig)) {
                 layer.open({
                 content: '用户名为6-30位英文或数字',
                 time: 2,
                 shadeClose: true
                 });
                 return false;
                 }
                 */
                if (phone == '' || phone.length < 11) {
                    layer.open({
                        content: '请输入正确的手机号',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "../login/bindWXAction",
                    data: {
                        "phone": phone,
                        "pwd": pwd
                    },
                    success: function (msg) {
                        var data = JSON.parse(msg);
                        if (data.result == 1) {
                            layer.open({
                                content: "操作成功",
                                time: 2,
                                shadeClose: true,
                                end: function () {
                                    WeixinJSBridge.call('closeWindow');
                                }
                            });
                        } else {
                            layer.open({
                                content: data.error.msg,
                                time: 2,
                                shadeClose: true
                            });
                            return false;
                        }
                    }
                });
            });
        </SCRIPT>
    </body>
</html>
<?php }} ?>
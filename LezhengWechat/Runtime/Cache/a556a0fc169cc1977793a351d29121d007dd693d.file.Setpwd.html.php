<?php /* Smarty version Smarty-3.1.6, created on 2017-03-27 22:35:39
         compiled from "./LezhengWechat/Home/View\Login\Setpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:2750158aa9da8501b15-70125050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a556a0fc169cc1977793a351d29121d007dd693d' => 
    array (
      0 => './LezhengWechat/Home/View\\Login\\Setpwd.html',
      1 => 1490590635,
      2 => 'file',
    ),
    '942f110b495b1fb48e10e9dc936729fb67b330e5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1490320098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2750158aa9da8501b15-70125050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58aa9da87a96b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aa9da87a96b')) {function content_58aa9da87a96b($_smarty_tpl) {?><html>
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
return.png"></a>设置密码
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd bottom_line">
            <span class="input_title">新密码：</span>&nbsp;&nbsp;&nbsp; <input type="password" name="pwd" value="" placeholder="请输入6-16位密码（字母+数字）" id="pwd" maxlength="16" class="input_box all_tex"/>
            <div class="pwd" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>
        <div class="input_padd">
            <span class="input_title">确认密码：</span>&nbsp;<input type="password" name="doublepwd" value="" placeholder="请再输入一次密码" id="doublepwd" maxlength="16" class="input_box all_tex"/>
            <div class="doublepwd" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>        
    </div>   
    <div class="conntbottom_line"></div> 
    <div class="mianzxy input_title">
        <input type="checkbox" name="isagree" id="isagree" checked="checked"/> 我已阅读并同意
        <a href="../login/agreement"><span class="mianzxy_text">《用户使用协议》</span></a>       
    </div>
    <div class="submit_buttonhui" onclick="">注册</div>
</div>

<SCRIPT type="text/javascript">
    //删除输入,隐藏删除图标
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
    //电话
    $(".doublepwd").click(function () {
        $("#doublepwd").val('');
        sessionStorage.removeItem('doublepwd');
        $(".doublepwd").css("display", "none");
    });
    $("#doublepwd").focus(function () {
        var doublepwd = $("#doublepwd").val();
        if (doublepwd != '') {
            $(".doublepwd").css("display", "block");
        } else {
            $(".doublepwd").css("display", "none");
        }
    });
    $("#doublepwd").keyup(function () {
        var doublepwd = $("#doublepwd").val();
        sessionStorage.setItem('doublepwd', doublepwd);
        if (doublepwd != '') {
            $(".doublepwd").css("display", "block");
        } else {
            $(".doublepwd").css("display", "none");
        }
    });
    //删除表单值
    $(".delinput").on("click", function () {
        $(".submit_button").attr("class", "").addClass("submit_buttonhui");
    });
    //输入后的按钮颜色    
    $("input,textarea").on("keyup", function () {
        var pwd = $("#pwd").val();
        var doublepwd = $("#doublepwd").val();
        var vricode = $("#vricode").val();
        if (pwd !== '' && doublepwd !== '' && vricode !== '') {
            $(".submit_buttonhui").attr("class", "").addClass("submit_button");
        } else {
            $(".submit_button").attr("class", "").addClass("submit_buttonhui");
        }
    });
    $(function () {
        //点击提交按钮时
        $(document).on("click", ".submit_button", function () {
            var pwd = $.trim($("#pwd").val());
            var doublepwd = $.trim($("#doublepwd").val());
            var people = sessionStorage.getItem('people');
            var phone = sessionStorage.getItem('phone');
            //判断输入            
            if (pwd.match(/^(?![^a-zA-Z]+$)(?!\D+$).{6,16}$/ig)) {                
            }else {
                layer.open({
                    content: '请输入6-16位密码（字母+数字）',
                    time: 2,
                    shadeClose: true
                });
                return false;                
            }
            if (doublepwd !== pwd) {
                layer.open({
                    content: '密码输入不一致',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }


            if ($("#isagree").is(':checked')) {
                $.ajax({
                    type: "POST",
                    url: "../login/RegistAction",
                    data: {
                        "people": people,
                        "phone": phone,
                        "pwd": pwd
                    },
                    success: function (msg) {
						//alert(msg);
                        var data = JSON.parse(msg);
                        if (data.uid) {						
                            layer.open({
                                content: '注册成功',
                                time: 2,
                                shadeClose: true,
								end:function(){
									location.href = "../need/AreaSelect";
								}
                            });
                            
                        } else {
                            layer.open({
                                content: data.error.msg,
                                time: 2,
                                shadeClose: true
                            });
                        }
                    }
                });
            } else {
                layer.open({
                    content: '必须选择已阅读',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
        });
    });
</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
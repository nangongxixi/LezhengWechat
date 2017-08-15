<?php /* Smarty version Smarty-3.1.6, created on 2017-02-21 11:04:38
         compiled from "./LezhengWechat/Home/View\Appointment\Addinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1339958abae46ed6326-65232368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7199d0d80c9bce235a8f3ef1590eb62629794663' => 
    array (
      0 => './LezhengWechat/Home/View\\Appointment\\Addinfo.html',
      1 => 1487041422,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1486963340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1339958abae46ed6326-65232368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58abae471b2f2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58abae471b2f2')) {function content_58abae471b2f2($_smarty_tpl) {?><html>
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
return.png"></a>信息填写
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">预约内容</div>
            <div class="clear"></div> 
        </div>
        <div class="jianj"></div>
        <div class="input_padd input_paddmin">
            <span class="input_title">办事事项：</span>&nbsp;<span class="input_box all_tex input_title" id="banshisx"></span>         
        </div>       
        <div class="input_padd input_paddmin">
            <span class="input_title">办事时间：</span>&nbsp;&nbsp;&nbsp; <span class="input_box all_tex input_title" id="banshisj"></span>         
        </div>
        <div class="input_padd input_paddmin">
            <span class="input_title">办事窗口：</span>&nbsp;<span class="input_box all_tex input_title" id="banshick"></span>               
        </div>
        <div class="input_padd input_paddmin">
            <span class="input_title">办事地址：</span>&nbsp;<span class="input_box all_tex input_title" id="banshidz"></span>   
        </div>       
    </div> 
    <div class="fenge"></div>
    <div class="baibg message_kongge">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">其他信息</div>
            <div class="clear"></div> 
        </div>       
        <div class="input_padd bottom_line">
            <span class="input_title">预约人：</span>&nbsp;&nbsp;&nbsp; <input type="text" name="people" value="" placeholder="请输入预约人姓名" id="people" maxlength="11" class="input_box all_tex input_bg"/>
            <div class="people" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>    
        <div class="input_padd bottom_line  input_bg">
            <span class="input_title">证件类型：</span>&nbsp;<input type="text" name="certificate" value="" placeholder="身份证" id="certificate" maxlength="11" class="input_box all_tex"/>           
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="input_jiantou"></div>            
        </div>        
        <div class="input_padd bottom_line">
            <span class="input_title">证件号码：</span>&nbsp;<input type="text" name="certificatecode" value="" placeholder="所持证件号码" id="certificatecode" maxlength="11" class="input_box all_tex input_bg"/>
            <div class="certificatecode" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>
        <div class="shuoming_color all_text">
            <span class="input_title shuoming_title">服务说明：</span> <br>  
            1.我们将会把预约成功与否，稍后发送至您的消息栏，请注意查收。<br>  
            2.根据预约时间到对应办事地方大厅自主取号终端机上取预约号。
            <div class="clear"></div> 
        </div>        
    </div>    
    <div class="conntbottom_line"></div>
    <div class="submit_button">提交申请</div>
</div>

<SCRIPT type="text/javascript">
    //删除输入,隐藏删除图标   
    //预约人
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
    //证件号码
    $(".certificatecode").click(function () {
        $("#certificatecode").val('');
        sessionStorage.removeItem('certificatecode');
        $(".certificatecode").css("display", "none");
    });
    $("#certificatecode").focus(function () {
        var certificatecode = $("#certificatecode").val();
        if (certificatecode != '') {
            $(".certificatecode").css("display", "block");
        } else {
            $(".certificatecode").css("display", "none");
        }
    });
    $("#certificatecode").keyup(function () {
        var certificatecode = $("#certificatecode").val();
        sessionStorage.setItem('certificatecode', certificatecode);
        if (certificatecode != '') {
            $(".certificatecode").css("display", "block");
        } else {
            $(".certificatecode").css("display", "none");
        }
    });
    //区域赋值
    $("#certificate").on("click", function () {
        location.href = "../Need/AreaSelect";
    });

    $(function () {
        var banshisx = sessionStorage.getItem('banshisx');
        var banshisj = sessionStorage.getItem('banshisj');
        var banshick = sessionStorage.getItem('banshick');
        var banshidz = sessionStorage.getItem('banshidz');      
        $("#banshisx").html(banshisx);
        $("#banshisj").html(banshisj);
        $("#banshick").html(banshick);
        $("#banshidz").html(banshidz);
        //点击提交后
        $(".submit_button").on("click", function () {
            location.href = "../Appointment/SubmitSuccess";
        });
    });



</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
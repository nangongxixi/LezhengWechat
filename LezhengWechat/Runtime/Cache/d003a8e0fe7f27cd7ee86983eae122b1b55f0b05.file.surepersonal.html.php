<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 11:36:44
         compiled from "./LezhengWechat/Home/View\Need\surepersonal.html" */ ?>
<?php /*%%SmartyHeaderCode:1860589c0fbcc355f2-74821658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd003a8e0fe7f27cd7ee86983eae122b1b55f0b05' => 
    array (
      0 => './LezhengWechat/Home/View\\Need\\surepersonal.html',
      1 => 1488518730,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1488354145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860589c0fbcc355f2-74821658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589c0fbce0a26',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c0fbce0a26')) {function content_589c0fbce0a26($_smarty_tpl) {?><html>
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
return.png"></a>个人事项
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">基本信息</div>
            <div class="clear"></div> 
        </div>
        <div class="jianj"></div>
        <div class="input_padd input_paddmin">
            <span class="input_title">需求人：</span>&nbsp;&nbsp;&nbsp; <span class="input_box all_tex input_title" id="people"></span>         
        </div>
        <div class="input_padd input_paddmin">
            <span class="input_title">手机号码：</span>&nbsp;<span class="input_box all_tex input_title" id="phone"></span>               
        </div>        
        <div class="input_padd input_paddmin">
            <span class="input_title">所在区域：</span>&nbsp;<span class="input_box all_tex input_title" id="area"></span>    
        </div>        
        <div class="input_padd input_paddmin">
            <span class="input_title">详细地址：</span>&nbsp;<span class="input_box all_tex input_title" id="address"></span>   
        </div>
        <div class="input_padd input_paddmin">
            <div class="left"><span class="input_title">需求：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div><div class="input_box all_tex left input_title" id="xuq"></div> 
            <div class="clear"></div>
        </div>
        <div class="jianj"></div>
    </div>
    <div class="conntbottom_line"></div>
    <div class="submit_button" id="submit">提交</div>
</div>

<SCRIPT type="text/javascript">
    $(function () {
        var people = sessionStorage.getItem('people');
        var phone = sessionStorage.getItem('phone');
        var address = sessionStorage.getItem('address');
        var xuq = sessionStorage.getItem('xuq');
        var area = sessionStorage.getItem('area');
        var actionname = "<?php echo @ACTION_NAME;?>
";
        $("#people").html(people);
        $("#phone").html(phone);
        $("#address").html(address);
        $("#xuq").html(xuq);
        $("#area").html(area);
        //点击提交按钮时
        $("#submit").on("click", function () {            
            $.ajax({
                type: "POST",
                url: "../need/ShixiangAction",
                data: {
                    "actionname": actionname,
                    "people": people,
                    "phone": phone,
                    "address": address,
                    "area": area,
                    "xuq": xuq
                },
                success: function (msg) {                    
                    var data = JSON.parse(msg);
                    if (data.result == 1) {                        
                       location.href = "../need/submitsuccess";
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
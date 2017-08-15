<?php /* Smarty version Smarty-3.1.6, created on 2017-02-16 13:59:25
         compiled from "./LezhengWechat/Home/View\Myinfo\address.html" */ ?>
<?php /*%%SmartyHeaderCode:79058a5379ddb2177-66884977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b692d21c15ecd9f6230b394e053b926a00c2d769' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\address.html',
      1 => 1487224763,
      2 => 'file',
    ),
    '5d190fe6eb424bc2bef5a99077feb543316d640f' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\Default.html',
      1 => 1486963340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79058a5379ddb2177-66884977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a5379e0255d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5379e0255d')) {function content_58a5379e0255d($_smarty_tpl) {?><html>
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
return.png"></a>常驻地址
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="setinfo_button setinfo_nichen">
        <div class="all_padd">
            <div class="input_title">所在区域<span class="right setinfo_mingc">成都市 武侯区</span></div>         
            <img src="<?php echo @IMG_URL;?>
jiantou.png" class="setinfo_jiantou setinfo_jiantou1">
            <div class="bottom_line"></div>
        </div>         
    </div>
    <div class="baibg all_padd">
        <div class="input_padd">
            <span class="input_title">详细地址</span>
            <span class="right setinfo_phone" id="modyadd">碧云路35号</span>
            <input type="text" name="address" value="" id="address" maxlength="11" class="input_box all_tex address_input" style="display: none"/>
            <div class="address" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>              
    </div>       
    <div class="bottom_line"></div> 
    <div class="submit_button">确认</div>
</div>   
<SCRIPT type="text/javascript">
    $(function () {
        $("#modyadd").click(function(){
            $(this).css("display","none");
            $("#address").css("display","block");
            var addval = $(this).html();
            $("#address").val(addval).focus();
            
        });
        //地址
        $(".address").click(function () {
            $("#address").val('');
            sessionStorage.removeItem('address');
            $(".address").css("display", "none");
        });
        $("#address").focus(function () {
            var address = $("#address").val();
            if (address != '') {
                $(".address").css("display", "block");
            } else {
                $(".address").css("display", "none");
            }
        });
        $("#address").keyup(function () {
            var address = $("#address").val();
            sessionStorage.setItem('address', address);
            if (address != '') {
                $(".address").css("display", "block");
            } else {
                $(".address").css("display", "none");
            }
        });
        //点击确认
        $(".submit_button").click(function () {
            var address = $("#address").val();
            if (address == '') {
                layer.open({
                    content: '请输入地址信息',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            $.ajax({
                type: "GET",
                url: "../myinfo/modyaddress/address/" + address,
                success: function (msg) {
                    //alert(msg);
                    if (0 == msg) {
                        layer.open({
                            content: '修改成功',
                            time: 2,
                            shadeClose: true
                        });
                        location.href = "../myinfo/perinfo";
                    } else {
                        layer.open({
                            content: '修改失败',
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
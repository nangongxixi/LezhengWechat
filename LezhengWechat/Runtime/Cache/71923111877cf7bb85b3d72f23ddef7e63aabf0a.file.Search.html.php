<?php /* Smarty version Smarty-3.1.6, created on 2017-03-03 13:33:03
         compiled from "./LezhengWechat/Home/View\Epsquery\Search.html" */ ?>
<?php /*%%SmartyHeaderCode:1059858a55f12c16e99-08279382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71923111877cf7bb85b3d72f23ddef7e63aabf0a' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\Search.html',
      1 => 1488164168,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1488354145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059858a55f12c16e99-08279382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a55f12e0708',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a55f12e0708')) {function content_58a55f12e0708($_smarty_tpl) {?><html>
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
return.png"></a>事项搜索
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div> 
    <div class="all_padd sear_box">     
        <input type="text" name="sear" value="" placeholder="请输入关键字…" id="sear" class="sear_input"/>
        <img src="<?php echo @IMG_URL;?>
searimg.png" class="searimg">
        <div class="sear_button">搜索</div>
        <img src="<?php echo @IMG_URL;?>
del.png" class="delinput sear_del" style="display: none">
    </div>
    <div class="baibg">
        <div class="bottom_line"></div>
        <div id="shixiangitem"></div>
        <div class="bottom_line"></div>
        <div class="clear"></div>
    </div>    
</div>
<SCRIPT type="text/javascript">
    $(function () {

        //删除输入
        $(".sear_del").click(function () {
            $("#sear").val('');
            sessionStorage.removeItem('sear');
            $(".sear_del").css("display", "none");
        });

        //输入框获取光标时的状态
        $("#sear").focus(function () {
            var sear = $("#sear").val();
            if (sear != '') {
                $(".sear_del").css("display", "block");
            } else {
                $(".sear_del").css("display", "none");
            }
        });

        //输入框获键盘弹起的状态
        $("#sear").keyup(function () {
            var sear = $("#sear").val();
            sessionStorage.setItem('sear', sear);
            if (sear != '') {
                $(".sear_del").css("display", "block");
            } else {
                $(".sear_del").css("display", "none");
            }
        });

        //获取搜索结果
        $(".sear_button").on("click", function () {
            var keyword = $("#sear").val();
            var areacode = sessionStorage.getItem('areacode');
            $.ajax({
                type: "POST",
                url: "../Epsquery/SearitemAction",
                data: {
                    "keyword": keyword,
                    "areacode": areacode
                },
                success: function (msg) {
                    $("#shixiangitem").html("");
                    var data = JSON.parse(msg);
                    data.datalist = data.datalist.reverse();
                    $.each(data.datalist, function (i) {
                        $("#shixiangitem").prepend('<div class="shixiangitem shixiang_line" shixiangcode="' + data.datalist[i].code + '"><img src="<?php echo @IMG_URL;?>
zxgg.png" class="shixiangicon"><span class="input_title">' + data.datalist[i].title + '</span></div>');
                    });
                }
            });
        });

        //点击具体事项的时候
        $(document).on("click", ".shixiangitem", function () {
            var shixiangcode = $(this).attr("shixiangcode");
            sessionStorage.setItem('shixiangcode', shixiangcode);
            location.href = "../Epsquery/shixianginfo";
        });

    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
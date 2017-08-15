<?php /* Smarty version Smarty-3.1.6, created on 2017-02-15 14:56:30
         compiled from "./LezhengWechat/Home/View\Myinfo\orderinfo1.html" */ ?>
<?php /*%%SmartyHeaderCode:817158a3c7e5d304f8-23399482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f96e9b449f3145d3531207a5c4c9a4e43385d5f9' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\orderinfo1.html',
      1 => 1487141789,
      2 => 'file',
    ),
    '29f8e7fb1d9334ee51d269e88fd9fc76548a065f' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\baibgdefault.html',
      1 => 1487123023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '817158a3c7e5d304f8-23399482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a3c7e610ee3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3c7e610ee3')) {function content_58a3c7e610ee3($_smarty_tpl) {?><html>
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
    <body class="baibg">        
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>我的订单
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>  
    <div class="order_box baibg all_text input_title">
        <div class="left order_ico"><img src="<?php echo @IMG_URL;?>
newsico3.png"></div>
        <div class="right order_right order_padd">
            <div class="order_title right">                               
                <span class="left ordertitle_font">申领食品经营许可证</span>
                <span class="right orderinfo_status1">受理正常</span>
            </div>
            <div class="clear"></div>            
            <div class='feigcs_sj orderinfo_padd'>订单编号： 8165646461313</div>
            <div class='feigcs_sj'>李晓： 13545456666</div>            
        </div>
        <div class='clear'></div>
        <div class="bottom_line"></div>       
        <div class='order_cancel_button orderinfo_button'>查看更多</div> 
        <div class='order_cancel_button'>联系客服</div>        
        <div class='clear'></div>
    </div>
    <div class="fenge fenge_bg"></div>
    <div class="baibg all_padd input_title">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">受理状态</div>
            <div class="clear"></div> 
        </div>
        <div class="orderinfo_status_box">            
            <div class="all_text">
                <div class="orderinfo_status_lvdaico left"></div>
                <div class="orderinfo_clz orderinfo_text_hei">处理中</div>
                <div class="feigcs_sj">您的订单已经受理</div>
                <div class='feigcs_sj'>2017-02-18 15：30：00</div>                
                <div class="orderinfo_status_info bottom_line yuyue_box right"></div>
            </div>
        </div>
        <div class="clear"></div>                 
        <div class="all_text">
            <div class="orderinfo_status_huidaico left"></div>
            <div class="orderinfo_clz">商家接收</div>
            <div class="feigcs_sj">您的订单已经开始分派到响应的商家</div>
            <div class='feigcs_sj'>2017-02-18 15：30：00</div>
            <div class="orderinfo_status_info bottom_line yuyue_box right"></div>
        </div>
        <div class="clear"></div>                 
        <div class="all_text">
            <div class="orderinfo_status_huiico left"></div>
            <div class="orderinfo_clz">订单生成中</div>           
            <div class='feigcs_sj'>2017-02-18 15：30：00</div>
        </div>        
    </div> 
</div>
<SCRIPT type="text/javascript">
    $(function () {
        //选项卡切换
        $("#navtab .title li").click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            var li = $(this).parent().next().children();
            $(li[index]).show().siblings().hide();
            //var lid = $(".active").attr("id");            
        });
        //获取数据
        var areacode = sessionStorage.getItem('areacode');
        var code = "<?php echo $_GET['code'];?>
";
        $.ajax({
            type: "GET",
            url: "../../../../../Epsquery/ShixiangListAction/areacode/" + areacode + '/code/' + code,
            success: function (msg) {
                //alert(msg);
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    $("#shixiangitem").prepend('<div class="shixiangitem shixiang_line"><img src="<?php echo @IMG_URL;?>
zxgg.png" class="shixiangicon"><span class="input_title">' + data.datalist[i].title + '</span></div>');
                });
            }
        });
        //点击具体部门的时候
        //点击具体部门的时候
        $(".order_cancel_button").on("click", function () {
            location.href = "../myinfo/orderinfo2";
        });
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-01 19:34:35
         compiled from "./LezhengWechat/Home/View\Myinfo\Orderlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1388858b6b15a4c24e0-63557909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51ae27325eedbf4b13aaa1319db17b6ad61e8d34' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\Orderlist.html',
      1 => 1488368064,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1488354145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388858b6b15a4c24e0-63557909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58b6b15a88734',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6b15a88734')) {function content_58b6b15a88734($_smarty_tpl) {?><html>
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
return.png"></a>我的订单
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>  
    <div class="">
        <div class="bottom_line"></div>
        <div id="navtab">
            <ul class="title orderlist_kuan" >
                <li class="active" id="select1">全部</li>
                <li id="select2">待支付</li>
                <li id="select4">受理中</li>
                <li id="select5">待评价</li>
                <li id="select6">退款</li>
            </ul>             
            <ul class="baibg input_title all_text">                
                <li> 
                    <div class='fenge fenge_bg order_topline'></div>
                    <div id="item1"></div>                    
                </li>
                <li style="display:none">                    
                    <div id="xians2" style="display:none">
                        <div class='fenge fenge_bg order_topline'></div>
                        <div  id="item2"></div>
                    </div>
                    <div class="orderbg">
                        <div class="orderbg_yuan">
                            <div class="orderdzf_null"></div>
                        </div>                        
                    </div>
                </li>
                <li style="display:none">                    
                    <div id="xians4" style="display:none">
                        <div class='fenge fenge_bg order_topline'></div>
                        <div  id="item4"></div>
                    </div>
                    <div class="orderbg">
                        <div class="orderbg_yuan">
                            <div class="orderslz_null"></div>
                        </div>                        
                    </div>
                </li>
                <li style="display:none">                    
                    <div id="xians5" style="display:none">
                        <div class='fenge fenge_bg order_topline'></div>
                        <div  id="item5"></div>
                    </div>
                    <div class="orderbg">
                        <div class="orderbg_yuan">
                            <div class="orderdpj_null"></div>
                        </div>                        
                    </div>
                </li>
                <li style="display:none">                    
                    <div id="xians6" style="display:none">
                        <div class='fenge fenge_bg order_topline'></div>
                        <div  id="item6"></div>
                    </div>
                    <div class="orderbg">
                        <div class="orderbg_yuan">
                            <div class="order_null"></div>
                        </div>                        
                    </div>
                </li>
            </ul>
            <div class="clear"></div>        
        </div>
        <div class="bottom_line"></div>       
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
        //默认显示列表
        var page = 1;
        var querystatus = 1;//状态        
        $.ajax({
            type: "POST",
            url: "../myinfo/orderlistaction",
            data: {
                "page": page,
                "querystatus": querystatus
            },
            success: function (msg) {
                //alert(msg);
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    if (data.datalist[i].orderstatus == '4000') {
                        //生成中
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
tscl_3x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">交通局</span><span class="right order_status">生成中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">内容范德萨多少</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right order_status order_status1">订单生成中…</span><div class="clear"></div><div class="order_cancel_button">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    if (data.datalist[i].orderstatus == '4005' || data.datalist[i].orderstatus == '4006') {
                        //受理中
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
newsico3.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">经济类审批</span><span class="right order_status">受理中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">范德萨范德萨广泛的范德萨</div><div class="feigcs_sj">8月15日  10:00-11:00</div><div class="order_ba">工商局备案中…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥500</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button">联系专员</div><div class="order_cancel_button">申请退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    if (data.datalist[i].orderstatus == '4009') {
                        //待支付
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
home1_2x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">建筑类审批</span><span class="right order_status">待支付</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥300</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button">确认支付</div><div class="order_cancel_button order_cancel_buttonhui">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    if (data.datalist[i].orderstatus == '4015') {
                        //退款审核中
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
collection.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">规划局</span><span class="right order_status">退款审核中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right order_status order_status1">审核中…</span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    if (data.datalist[i].orderstatus == '4017') {
                        //退款审核通过
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
user.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">公安局</span><span class="right order_status">退款审核通过</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥620.00</span></span><div class="clear"></div><div class="order_cancel_button">确认退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    if (data.datalist[i].orderstatus == '4000') {
                        //退款中
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
znwd_3x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">房管局</span><span class="right order_status">退款中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥620.00</span></span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    if (data.datalist[i].orderstatus == '4016') {
                        //退款成功
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
my2x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">武侯区公司代办变更</span><span class="right order_status">退款成功</span></div><div class="clear"></div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥620.00</span></span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    if (data.datalist[i].iscomment == '0') {
                        //待评价
                        $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
mm.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">文体旅游局</span><span class="right order_status">待评价</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥980.00</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button">评价订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                    }
                    //删除最后一个双划线                            
                    if (data.datalist.length - 1 == i) {
                        $(".fenge:last").remove();
                    }
                });
            }
        });


        //点击全部的时候
        $("#select1").on("click", function () {
            $("#item1").html("");
            var page = 1;
            var querystatus = 1;//状态        
            $.ajax({
                type: "POST",
                url: "../myinfo/orderlistaction",
                data: {
                    "page": page,
                    "querystatus": querystatus
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    data.datalist = data.datalist.reverse();
                    if (data.datalist[0].orderid !== '') {
                        $("#xians2").css("display", "block");
                        $(".orderbg").css("display", "none");
                        $.each(data.datalist, function (i) {
                            if (data.datalist[i].orderstatus == '4000') {
                                //生成中
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
tscl_3x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">交通局</span><span class="right order_status">生成中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">内容范德萨多少</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right order_status order_status1">订单生成中…</span><div class="clear"></div><div class="order_cancel_button">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            if (data.datalist[i].orderstatus == '4005' || data.datalist[i].orderstatus == '4006') {
                                //受理中
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
newsico3.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">经济类审批</span><span class="right order_status">受理中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">范德萨范德萨广泛的范德萨</div><div class="feigcs_sj">8月15日  10:00-11:00</div><div class="order_ba">工商局备案中…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥500</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button">联系专员</div><div class="order_cancel_button">申请退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            if (data.datalist[i].orderstatus == '4009') {
                                //待支付
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
home1_2x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">建筑类审批</span><span class="right order_status">待支付</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥300</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button">确认支付</div><div class="order_cancel_button order_cancel_buttonhui">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            if (data.datalist[i].orderstatus == '4015') {
                                //退款审核中
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
collection.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">规划局</span><span class="right order_status">退款审核中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right order_status order_status1">审核中…</span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            if (data.datalist[i].orderstatus == '4017') {
                                //退款审核通过
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
user.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">公安局</span><span class="right order_status">退款审核通过</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥620.00</span></span><div class="clear"></div><div class="order_cancel_button">确认退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            if (data.datalist[i].orderstatus == '4000') {
                                //退款中
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
znwd_3x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">房管局</span><span class="right order_status">退款中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥620.00</span></span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            if (data.datalist[i].orderstatus == '4016') {
                                //退款成功
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
my2x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">武侯区公司代办变更</span><span class="right order_status">退款成功</span></div><div class="clear"></div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥620.00</span></span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            if (data.datalist[i].iscomment == '0') {
                                //待评价
                                $("#item1").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
mm.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">文体旅游局</span><span class="right order_status">待评价</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">8月15日  10:00-11:00</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥980.00</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button">评价订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            }
                            //删除最后一个双划线                            
                            if (data.datalist.length - 1 == i) {
                                $(".fenge:last").remove();
                            }
                        });
                    }
                }
            });
        });

        //待支付列表
        $("#select2").on("click", function () {
            $("#item2").html("");
            var page = 1;
            var querystatus = 2;//状态        
            $.ajax({
                type: "POST",
                url: "../myinfo/orderlistaction",
                data: {
                    "page": page,
                    "querystatus": querystatus
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    data.datalist = data.datalist.reverse();
                    if (data.datalist[0].orderid !== '') {
                        $("#xians2").css("display", "block");
                        $(".orderbg").css("display", "none");
                        $.each(data.datalist, function (i) {
                            //待支付
                            $("#item2").prepend('<div class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
home1_2x.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">建筑类审批</span><span class="right order_status">待支付</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥300</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button" orderid="' + data.datalist[i].orderid + '">确认支付</div><div class="order_cancel_button order_cancel_buttonhui" orderid="' + data.datalist[i].orderid + '">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            //删除最后一个双划线                            
                            if (data.datalist.length - 1 == i) {
                                $(".fenge:last").remove();
                            }
                        });
                    }
                    //订单详情
                    $(document).on("click", ".order_box", function () {                        
                        var orderid = $(this).attr("orderid");
                        location.href = "../myinfo/orderinfo/orderid/" + orderid;
                        event.stopPropagation();
                    });
                    
                    //点击取消订单
                    $(document).on("click", ".order_cancel_buttonhui", function () {
                        var orderid = $(this).attr("orderid");
                        location.href = "../myinfo/cancelorder/orderid/" + orderid;
                        event.stopPropagation();
                    });
                }
            });
        });

        //受理中列表
        $("#select4").on("click", function () {
            $("#item4").html("");
            var page = 1;
            var querystatus = 4;//状态        
            $.ajax({
                type: "POST",
                url: "../myinfo/orderlistaction",
                data: {
                    "page": page,
                    "querystatus": querystatus
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    data.datalist = data.datalist.reverse();
                    if (data.datalist[0].orderid !== '') {
                        $("#xians4").css("display", "block");
                        $(".orderbg").css("display", "none");
                        $.each(data.datalist, function (i) {
                            //受理中
                            $("#item4").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
newsico3.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">经济类审批</span><span class="right order_status">受理中</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">范德萨范德萨广泛的范德萨</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div><div class="order_ba">工商局备案中…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥500</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button">联系专员</div><div class="order_cancel_button">申请退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            //删除最后一个双划线                            
                            if (data.datalist.length - 1 == i) {
                                $(".fenge:last").remove();
                            }
                        });
                    }
                }
            });
        });

        //待评价列表
        $("#select5").on("click", function () {
            $("#item5").html("");
            var page = 1;
            var querystatus = 5;//状态        
            $.ajax({
                type: "POST",
                url: "../myinfo/orderlistaction",
                data: {
                    "page": page,
                    "querystatus": querystatus
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    data.datalist = data.datalist.reverse();
                    if (data.datalist[0].orderid !== '') {
                        $("#xians5").css("display", "block");
                        $(".orderbg").css("display", "none");
                        $.each(data.datalist, function (i) {
                            //待评价
                            $("#item5").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
mm.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">文体旅游局</span><span class="right order_status">待评价</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">武侯区公司设立代办</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥980.00</span></span><div class="clear"></div><div class="order_cancel_button order_lianxzy_button" orderid="' + data.datalist[i].orderid + '">评价订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            //删除最后一个双划线                            
                            if (data.datalist.length - 1 == i) {
                                $(".fenge:last").remove();
                            }
                        });
                    }
                    $(document).on("click", ".order_cancel_button", function () {
                        var orderid = $(this).attr("orderid");
                        location.href = "../myinfo/cancelorder/orderid/" + orderid;
                    });
                }
            });
        });

        //退款列表
        $("#select6").on("click", function () {
            $("#item6").html("");
            var page = 1;
            var querystatus = 6;//状态        
            $.ajax({
                type: "POST",
                url: "../myinfo/orderlistaction",
                data: {
                    "page": page,
                    "querystatus": querystatus
                },
                success: function (msg) {
                    var data = JSON.parse(msg);
                    data.datalist = data.datalist.reverse();
                    if (data.datalist[0].orderid !== '') {
                        $("#xians6").css("display", "block");
                        $(".orderbg").css("display", "none");
                        $.each(data.datalist, function (i) {
                            //退款审核通过
                            $("#item6").prepend('<div class="order_box baibg"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
user.png"></div><div class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + data.datalist[i].stepname + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div class="order_cancel_button" orderid="' + data.datalist[i].orderid + '">确认退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>');
                            //删除最后一个双划线                            
                            if (data.datalist.length - 1 == i) {
                                $(".fenge:last").remove();
                            }
                        });
                    }
                    //点击确认退款
                    $(document).on("click", ".order_cancel_button", function () {
                        var orderid = $(this).attr("orderid");
                        $.ajax({
                            type: "POST",
                            url: "../myinfo/suretuikuanaction",
                            data: {
                                "orderid": orderid
                            },
                            success: function (msg) {
                                var data = JSON.parse(msg);
                                if (data.result == '1') {
                                    layer.open({
                                        content: '操作成功',
                                        time: 1,
                                        shadeClose: true
                                    });
                                }
                            }
                        });
                    });
                }
            });
        });

        //点击具体部门的时候
        $(".order_cancel_button").on("click", function () {
            location.href = "../myinfo/orderinfo";
        });
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
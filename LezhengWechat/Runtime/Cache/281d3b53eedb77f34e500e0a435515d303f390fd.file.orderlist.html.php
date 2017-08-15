<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 13:26:47
         compiled from "./LezhengWechat/Home/View\Myinfo\orderlist.html" */ ?>
<?php /*%%SmartyHeaderCode:390458a2afc80d06e4-35491482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '281d3b53eedb77f34e500e0a435515d303f390fd' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\orderlist.html',
      1 => 1490678398,
      2 => 'file',
    ),
    '6d255580ba7d323da1c65b1b836d6000ba23cc20' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\feigebg.html',
      1 => 1490320091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390458a2afc80d06e4-35491482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a2afc846a5b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a2afc846a5b')) {function content_58a2afc846a5b($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="乐政微官网" />
        <meta name="description" content="乐政微官网"/>
        <title>乐政微官网</title>
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
dropload.css" />
		<script type="text/javascript" src="<?php echo @JS_URL;?>
zepto.min.js"></script>
		<script type="text/javascript" src="<?php echo @JS_URL;?>
dropload.min.js"></script>	
		<script type="text/javascript" src="<?php echo @JS_URL;?>
layer.js"></script>
    </head>
    <body class="feigebg"> 
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?>
        
<script type='text/javascript' src='<?php echo @LIB_URL;?>
js/bumenico.js'></script>
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
                <li class="active" id="select1" onclick="quanbu()">全部</li>
                <li id="select2" onclick="daizhifu()">待支付</li>
                <li id="select4" onclick="shoulizhong()">受理中</li>
                <li id="select5" onclick="daipingjia()">待评价</li>
                <li id="select6" onclick="tuikuan()">退款</li>
            </ul> 
			<ul>
				 <li class="select1"> 
                    <div class='fenge fenge_bg order_topline'></div>                    
					<div class="content zhans" id="xians1">
						<div id="item1"></div>
					</div>
                    <div class="orderbg" id="orderbg1" style="display:none">
                        <div class="orderbg_yuan">
                            <div class="order_null"></div>
                        </div>                        
                    </div>
                </li>
                <li style="display:none" class="select2">
                    <div class='fenge fenge_bg order_topline'></div>
					<div class="content zhans" id="xians2" style="display:none">
                        <div id="item2"></div>
                    </div>
                    <div class="orderbg" id="orderbg2" style="display:none">
                        <div class="orderbg_yuan">
                            <div class="orderdzf_null"></div>
                        </div>                        
                    </div>
                </li>
                <li style="display:none" class="select4">
                    <div class='fenge fenge_bg order_topline'></div>
                    <div class="content zhans" id="xians4" style="display:none">
                        <div id="item4"></div>
                    </div>
                    <div class="orderbg" id="orderbg4" style="display:none">
                        <div class="orderbg_yuan">
                            <div class="orderslz_null"></div>
                        </div>                        
                    </div>
                </li>
                <li style="display:none" class="select5">  
                    <div class='fenge fenge_bg order_topline'></div>
                    <div class="content zhans" id="xians5" style="display:none">
                        <div id="item5"></div>
                    </div>
                    <div class="orderbg" id="orderbg5" style="display:none">
                        <div class="orderbg_yuan">
                            <div class="orderdpj_null"></div>
                        </div>                        
                    </div>
                </li>
                <li style="display:none" class="select6"> 
                    <div class='fenge fenge_bg order_topline'></div>
                    <div class="content zhans" id="xians6" style="display:none">
                        <div id="item6"></div>
                    </div>
                    <div class="orderbg" id="orderbg6">
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
        sessionStorage.removeItem("sqtuik");
        //选项卡切换
        $("#navtab .title li").click(function () {		
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            var li = $(this).parent().next().children();
            $(li[index]).show().siblings().hide();
            var biaoqianid = $(this).attr("id");			
            var xuanxiangka = sessionStorage.setItem('biaoqianid', biaoqianid);			
            //var lid = $(".active").attr("id");            
        });
        //避免选项卡内容刷新		
        var xuanxiangka = sessionStorage.getItem('biaoqianid');			
        $("#" + xuanxiangka).addClass("active").siblings().removeClass("active");//显示选项卡
        var index = $("#" + xuanxiangka).index();		
        var li = $("#" + xuanxiangka).parent().next().children();
        $(li[index]).show().siblings().hide();//显示选项卡内容
        $(li[index]).find(".zhans").css("display", "block")
        //quanbu();//默认显示全部	
		//alert(index);
        if (index == 0 || index == -1) {
            //quanbu();
            quanbu();
        } else if (index == 1) {
            daizhifu();
        } else if (index == 2) {
            shoulizhong();
        } else if (index == 3) {
            daipingjia();
        } else if (index == 4) {
            tuikuan();
        }
    });	
	
    //全部
    function quanbu() {
		$("#item1").html("");
		$(".dropload-down").remove();
		$("#orderbg1").css("display", "none");
        // 页数			
        var page = 0;
        var querystatus = 1;		
        $('.content').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                page++;                
                $.ajax({
                    type: "POST",
                    url: "../myinfo/orderlistaction",
                    data: {
                        "page": page,
                        "querystatus": querystatus
                    },
                    success: function (msg) {
						// 拼接HTML
						var result = '';
                        var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
                        var arrLen = data.datalist.length;						
                        if (arrLen > 0) {
                            for (var i = 0; i < arrLen; i++) {
								$("#xians1").css("display", "block");
                                //隐射图标和状态提示
                                var department = data.datalist[i].department;
                                var orderstatus = parseInt(data.datalist[i].orderstatus);//根据订单状态显示列表样式 
                                var bumenico = yinsdata(department);//图标						
                                var viewstatus = zhuangtai(orderstatus);//状态						
                                if (data.datalist[i].department == '') {
                                    data.datalist[i].department = '代办业务';
                                }
                                //数据列表						
                                if (orderstatus == 4005 || orderstatus == 4006) {
                                    if (data.datalist[i].orderorigin == 1 || data.datalist[i].paystatus == 4) {
                                        result += '<div class="order_box baibg" ><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div><div class="order_ba">' + data.datalist[i].stepname + '…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button lianxizy1" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button firsttk' + i + '" orderid="' + data.datalist[i].orderid + '"  style="display:block">申请退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                    } else {
                                        result += '<div class="order_box baibg" ><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div><div class="order_ba">' + data.datalist[i].stepname + '…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button lianxizy1" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button firsttk' + i + '" orderid="' + data.datalist[i].orderid + '"  style="display:none">申请退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                    }
                                } else if (orderstatus == 4000 || orderstatus == 4001 || orderstatus == 4002) {
                                    //生成中								
                                    result += '<div onclick=""  class="order_box baibg" orderid="' + data.datalist[i].orderid + '" ><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" orderid="' + data.datalist[i].orderid + '" class="right order_right order_padd"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right order_status order_status1">' + data.datalist[i].stepname + '…</span><div class="clear"></div><div class="order_cancel_button cancelorder" orderid="' + data.datalist[i].orderid + '">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else if (orderstatus == 4004) {
                                    //待支付
                                    result += '<div class="order_box baibg" class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick=""  class="order_cancel_button order_lianxzy_button surezhifu" orderid="' + data.datalist[i].orderid + '">确认支付</div><div onclick="" class="order_cancel_button order_cancel_buttonhui cancelorder" orderid="' + data.datalist[i].orderid + '">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else if (orderstatus == 4014 || orderstatus == 4007) {
                                    //订单关闭
                                    result += '<div class="order_box baibg" class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><div class="clear"></div><div class="order_cancel_button delorder" onclick="" orderid="' + data.datalist[i].orderid + '">删除订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else if (orderstatus == 4015 || orderstatus == 4019) {
                                    //退款审核中
                                    result += '<div class="order_box baibg" class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right order_status order_status1">' + data.datalist[i].stepname + '…</span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else if (orderstatus == 4017) {
                                    //退款审核通过
                                    result += '<div class="order_box baibg" class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button lianxizy1" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button suretuikuan" orderid="' + data.datalist[i].orderid + '">确认退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else if (orderstatus == 4021) {
                                    //退款中
                                    result += '<div class="order_box baibg" class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else if (orderstatus == 4016) {
                                    //受理中
                                    result += '<div class="order_box baibg" ><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div><div class="order_ba">' + data.datalist[i].stepname + '…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button lianxizy1" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button deldd' + i + '" orderid="' + data.datalist[i].orderid + '" >删除订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else if (orderstatus == 4008 || orderstatus == 4009) {
                                    //待评价
                                    result += '<div class="order_box baibg" class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button luns pjdingdan' + i + '" iscomment="'+data.datalist[i].iscomment+'">评价订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
								} else if (orderstatus == 4018) {
                                    result += '<div class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button lianxizy1" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button suretk' + i + '" style="display:none" orderid="' + data.datalist[i].orderid + '">确认退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';

                                } else {
                                    //退款审核中
                                    result += '<div class="order_box baibg" class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right order_status order_status1">' + data.datalist[i].stepname + '…</span><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                }								
                                //删除订单
                                $(document).on("click", ".deldd" + i, function () {
                                    var orderid = $(this).attr("orderid");
                                    layer.open({
                                        content: '您确定要删除吗？',
                                        btn: ['确定', '取消'],
                                        shadeClose: false, //默认：true，是否点击遮罩时关闭层
                                        yes: function () {
                                            $.ajax({
                                                type: "POST",
                                                url: "../myinfo/delorderaction",
                                                data: {
                                                    "orderid": orderid
                                                },
                                                success: function (msg) {
                                                    var data = JSON.parse(msg);
                                                    if (data.result == '1') {
                                                        layer.open({
                                                            content: '操作成功',
                                                            time: 1,
                                                            shadeClose: true,
                                                            end: function () {
                                                                location.reload();
                                                            }
                                                        });
                                                    }
                                                }
                                            });
                                        }
                                    });
                                    return false;
                                });                                
                                //申请退款
                                $(document).on("click", ".firsttk" + i, function () {
                                    var orderid = $(this).attr("orderid");
                                    location.href = "../myinfo/tuikuansq/orderid/" + orderid;
                                    return false;
                                });
								//联系专员						
								$(document).on("click", ".lianxizy1", function () {
									var tel = $(this).attr("tel");								
									window.location.href = 'tel:' + tel;
									return false;
								});                             
                                //订单详情
                                $(document).on("click", ".order_right", function () {
                                    var thumimg = $(this).parent().find(".thum").attr("src");
                                    var orderid = $(this).attr("orderid");
                                    sessionStorage.setItem("bumenico", thumimg);
                                    location.href = "../myinfo/orderinfo/orderid/" + orderid;
                                    return false;
                                });
                                //评价订单
                                $(document).on("click", ".pjdingdan" + i, function () {
                                    var orderid = $(this).attr("orderid");
                                    location.href = "../myinfo/writepingjia/orderid/" + orderid;
                                    return false;
                                });	
								//点击取消订单
								$(document).on("click", ".cancelorder", function () {
									var orderid = $(this).attr("orderid");
									sessionStorage.setItem("tuistb", bumenico);
									location.href = "../myinfo/cancelorder/orderid/" + orderid;
									return false;
								});
                            }
                            //删除订单
                            $(document).on("click", ".delorder", function () {
                                var orderid = $(this).attr("orderid");
                                layer.open({
                                    content: '您确定要删除吗？',
                                    btn: ['确定', '取消'],
                                    shadeClose: false, //默认：true，是否点击遮罩时关闭层
                                    yes: function () {
                                        $.ajax({
                                            type: "POST",
                                            url: "../myinfo/delorderaction",
                                            data: {
                                                "orderid": orderid
                                            },
                                            success: function (msg) {
                                                var data = JSON.parse(msg);
                                                if (data.result == '1') {
                                                    layer.open({
                                                        content: '操作成功',
                                                        time: 1,
                                                        shadeClose: true,
                                                        end: function () {
                                                            location.reload();
                                                        }
                                                    });
                                                }
                                            }
                                        });
                                    }
                                });
                                return false;
                            });
                            
                            //点击确认退款
                            $(document).on("click", ".suretuikuan", function () {
                                var orderid = $(this).attr("orderid");
                                location.href = "../myinfo/suretuikuan/orderid/" + orderid;
                                return false;
                            });
                            //点击确认支付
                            $(document).on("click", ".surezhifu", function () {
                                var orderid = $(this).attr("orderid");
                                alert("微信支付接口申请中");
                                return false;
                            });
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面							
                            $('#item1').append(result);
							//隐藏评价过的订单的评价按钮
							$(".luns[iscomment='1']").css("display","none");
							if ($("#item1").html() == '') {
                                $("#orderbg1").css("display", "block");
                                $(".content").css("display", "none");
                            } else {
                                $("#orderbg1").css("display", "none");
                                $(".content").css("display", "block");
                            }
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);

                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        $(".dropload-down").after('<br>');
                        me.resetload();
                    }
                });
            }
        });        
    }
   

    //待支付
    function daizhifu() {
		$("#item2").html("");
		$(".dropload-down").remove();
		$("#orderbg2").css("display", "none");
        var page = 0;
        var querystatus = 2;
        $('.content').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: "POST",
                    url: "../myinfo/orderlistaction",
                    data: {
                        "page": page,
                        "querystatus": querystatus
                    },
                    success: function (msg) {
                        var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
                        var arrLen = data.datalist.length;
                        if (arrLen > 0) {
                            for (var i = 0; i < arrLen; i++) {
								$("#xians2").css("display", "block");
                                //隐射图标和状态提示
                                var department = data.datalist[i].department;
                                var orderstatus = parseInt(data.datalist[i].orderstatus);//根据订单状态显示列表样式 
                                var bumenico = yinsdata(department);//图标						
                                var viewstatus = zhuangtai(orderstatus);//状态						
                                if (data.datalist[i].department == '') {
                                    data.datalist[i].department = '代办业务';
                                }
                                //待支付
                                result += '<div class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button surezhifu" orderid="' + data.datalist[i].orderid + '">确认支付</div><div class="order_cancel_button order_cancel_buttonhui canceldingdan" onclick="" orderid="' + data.datalist[i].orderid + '">取消订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
							}							
                            //订单详情
                            $(document).on("click", ".order_right", function () {
                                var thumimg = $(this).parent().find(".thum").attr("src");
                                var orderid = $(this).attr("orderid");
                                sessionStorage.setItem("bumenico", thumimg);
                                location.href = "../myinfo/orderinfo/orderid/" + orderid;
                                return false;
                            });
                            //点击取消订单
                            $(document).on("click", ".canceldingdan", function () {
                                var orderid = $(this).attr("orderid");
								//推送订单通知													
								$.ajax({
									type: "GET",
									url: "../need/dingdantongzhi?cancelorder=" + orderid			
								});
                                location.href = "../myinfo/cancelorder/orderid/" + orderid;
                                return false;
                            });
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面
                            $('#item2').append(result);
							//点击确认支付
							$(".surezhifu").on("click", function () {
								var orderid = $(this).attr("orderid");
								alert("微信支付接口申请中");
								return false;
							});							
                            if ($("#item2").html() == '') {
                                $("#orderbg2").css("display", "block");
                                $(".content").css("display", "none");
                            } else {
                                $("#orderbg2").css("display", "none");
                                $(".content").css("display", "block");
                            }
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);
                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            }
        });
    }

    //受理中
    function shoulizhong() {
		$("#item4").html("");
		$(".dropload-down").remove();
		$("#orderbg4").css("display", "none");
        var page = 0;
        var querystatus = 4;
        $('.content').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: "POST",
                    url: "../myinfo/orderlistaction",
                    data: {
                        "page": page,
                        "querystatus": querystatus
                    },
                    success: function (msg) {
                        var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
                        var arrLen = data.datalist.length;
                        if (arrLen > 0) {
                            for (var i = 0; i < arrLen; i++) {
								$("#xians4").css("display", "block");
                                //隐射图标和状态提示
                                var department = data.datalist[i].department;
                                var orderstatus = parseInt(data.datalist[i].orderstatus);//根据订单状态显示列表样式 
                                var bumenico = yinsdata(department);//图标						
                                var viewstatus = zhuangtai(orderstatus);//状态						
                                if (data.datalist[i].department == '') {
                                    data.datalist[i].department = '代办业务';
                                }
                                //受理中
                                if (data.datalist[i].orderorigin == 1 || data.datalist[i].paystatus == 4) {
                                    result += '<div class="order_box baibg" ><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div><div class="order_ba">' + data.datalist[i].stepname + '…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button shoullxzy" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button sqtuik' + i + '" orderid="' + data.datalist[i].orderid + '"  style="display:block">申请退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                } else {
                                    result += '<div class="order_box baibg" ><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div><div class="order_ba">' + data.datalist[i].stepname + '…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button shoullxzy" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button sqtuik' + i + '" orderid="' + data.datalist[i].orderid + '"  style="display:none">申请退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                }                                
                                //订单详情
                                $(document).on("click", ".order_right", function () {
                                    var thumimg = $(this).parent().find(".thum").attr("src");
                                    var orderid = $(this).attr("orderid");
                                    sessionStorage.setItem("bumenico", thumimg);
                                    location.href = "../myinfo/orderinfo/orderid/" + orderid;
                                    return false;
                                });
                                //申请退款
                                $(document).on("click", ".sqtuik" + i, function () {
                                    var orderid = $(this).attr("orderid");
                                    location.href = "../myinfo/tuikuansq/orderid/" + orderid;
                                    return false;
                                });								
                            }
							//联系专员						
							$(document).on("click", ".shoullxzy", function () {
								var tel = $(this).attr("tel");								
								window.location.href = 'tel:' + tel;
								return false;
							});
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面
                            $('#item4').append(result);
                            //默认图片和家在状态
                            if ($("#item4").html() == '') {
                                $("#orderbg4").css("display", "block");
                                $(".content").css("display", "none");
                            } else {
                                $("#orderbg4").css("display", "none");
                                $(".content").css("display", "block");
                            }
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);                       
                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            }
        });
    }

    //待评价
    function daipingjia() {	
		$("#item5").html("");
		$(".dropload-down").remove();
		$("#orderbg5").css("display", "none");
        var page = 0;
        var querystatus = 5;
        $('.content').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: "POST",
                    url: "../myinfo/orderlistaction",
                    data: {
                        "page": page,
                        "querystatus": querystatus
                    },
                    success: function (msg) {
                        var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
                        var arrLen = data.datalist.length;
                        if (arrLen > 0) {
                            for (var i = 0; i < arrLen; i++) {
								$("#xians5").css("display", "block");
                                //隐射图标和状态提示
                                var department = data.datalist[i].department;
                                var orderstatus = parseInt(data.datalist[i].orderstatus);//根据订单状态显示列表样式 
                                var bumenico = yinsdata(department);//图标						
                                var viewstatus = zhuangtai(orderstatus);//状态						
                                if (data.datalist[i].department == '') {
                                    data.datalist[i].department = '代办业务';
                                }
                                //待评价
                                result += '<div class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button pingjiadt" orderid="' + data.datalist[i].orderid + '">评价订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                            }
                            ;
                            //订单详情
                            $(document).on("click", ".order_right", function () {
                                var thumimg = $(this).parent().find(".thum").attr("src");
                                var orderid = $(this).attr("orderid");
                                sessionStorage.setItem("bumenico", thumimg);
                                location.href = "../myinfo/orderinfo/orderid/" + orderid;
                                return false;
                            });
                            //评价订单
                            $(document).on("click", ".pingjiadt", function () {
                                var orderid = $(this).attr("orderid");
                                location.href = "../myinfo/writepingjia/orderid/" + orderid;
                                return false;
                            });
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面
                            $('#item5').append(result);
                            //默认图片和家在状态                            
                            if ($("#item5").html() == '') {
                                $("#orderbg5").css("display", "block");
                                $(".content").css("display", "none");
                            } else {
                                $("#orderbg5").css("display", "none");
                                $(".content").css("display", "block");
                            }
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);
                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            }
        });
    }

    //退款 
    function tuikuan() {		
		$("#item6").html("");
		$(".dropload-down").remove();
		$("#orderbg6").css("display", "none");
        var page = 0;
        var querystatus = 6;
        $('.content').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: "POST",
                    url: "../myinfo/orderlistaction",
                    data: {
                        "page": page,
                        "querystatus": querystatus
                    },
                    success: function (msg) {
                        var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
                        var arrLen = data.datalist.length;
                        if (arrLen > 0) {
                            $("#xians6").css("display", "block");
                            for (var i = 0; i < arrLen; i++) {
                                //隐射图标和状态提示
                                var department = data.datalist[i].department;
                                var orderstatus = parseInt(data.datalist[i].orderstatus);//根据订单状态显示列表样式 
                                var bumenico = yinsdata(department);//图标						
                                var viewstatus = zhuangtai(orderstatus);//状态						
                                if (data.datalist[i].department == '') {
                                    data.datalist[i].department = '代办业务';
                                }
                                //退款审核通过
                                if (orderstatus !== 4016) {
                                    result += '<div class="order_box baibg" orderid="' + data.datalist[i].orderid + '"><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">退款金额：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button lianxizy1" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button suretk' + i + '" style="display:none" orderid="' + data.datalist[i].orderid + '">确认退款</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                }
                                if (orderstatus == 4017) {
                                    $(".suretk" + i).css("display", "block");
                                }
                                if (orderstatus == 4015 || orderstatus == 4019) {
                                    $(".zuay" + i).css("display", "none");
                                }
                                if (orderstatus == 4016) {
                                    //受理中
                                    result += '<div class="order_box baibg" ><div class="left order_ico"><img src="<?php echo @IMG_URL;?>
bumenico/' + bumenico + '.png" class="thum"></div><div onclick="" class="right order_right order_padd" orderid="' + data.datalist[i].orderid + '"><div class="order_title right"><span class="left ordertitle_font">' + data.datalist[i].department + '</span><span class="right order_status">' + viewstatus + '</span></div><div class="clear"></div><div class="pingjia_content right ordertitle_font">' + data.datalist[i].productname + '</div><div class="feigcs_sj">' + data.datalist[i].operatetime + '</div><div class="order_ba">' + data.datalist[i].stepname + '…</div></div><div class="clear"></div><div class="bottom_line"></div><span class="right">合计：<span class="order_status order_status1 order_status3"> ￥' + data.datalist[i].amountmoney + '</span></span><div class="clear"></div><div onclick="" class="order_cancel_button order_lianxzy_button lianxizy1" tel="'+data.datalist[i].staffphone+'">联系专员</div><div onclick="" class="order_cancel_button deldd' + i + '" orderid="' + data.datalist[i].orderid + '" >删除订单</div><div class="bottom_line"></div><div class="clear"></div></div><div class="fenge fenge_bg"></div>';
                                }
                                //删除订单
                                $(document).on("click", ".deldd" + i, function () {
                                    var orderid = $(this).attr("orderid");
                                    layer.open({
                                        content: '您确定要删除吗？',
                                        btn: ['确定', '取消'],
                                        shadeClose: false, //默认：true，是否点击遮罩时关闭层
                                        yes: function () {
                                            $.ajax({
                                                type: "POST",
                                                url: "../myinfo/delorderaction",
                                                data: {
                                                    "orderid": orderid
                                                },
                                                success: function (msg) {
                                                    var data = JSON.parse(msg);
                                                    if (data.result == '1') {
                                                        layer.open({
                                                            content: '操作成功',
                                                            time: 1,
                                                            shadeClose: true,
                                                            end: function () {
                                                                location.reload();
                                                            }
                                                        });
                                                    }
                                                }
                                            });
                                        }
                                    });
                                    return false;
                                });
                                //联系专员						
								$(document).on("click", ".lianxizy1", function () {
									var tel = $(this).attr("tel");								
									window.location.href = 'tel:' + tel;
									return false;
								});
                                //点击确认退款
                                $(document).on("click", ".suretk" + i, function () {
                                    var orderid = $(this).attr("orderid");
                                    location.href = "../myinfo/suretuikuan/orderid/" + orderid;
                                    return false;
                                });
                            }
                            ;
                            //订单详情
                            $(document).on("click", ".order_right", function () {
                                var thumimg = $(this).parent().find(".thum").attr("src");
                                var orderid = $(this).attr("orderid");
                                sessionStorage.setItem("bumenico", thumimg);
                                location.href = "../myinfo/orderinfo/orderid/" + orderid;
                                return false;
                            });
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面							
                            $('#item6').append(result);
                            //默认图片和家在状态
                            if ($("#item6").html() == '') {
                                $("#orderbg6").css("display", "block");
                                $(".content").css("display", "none");
                            } else {
                                $("#orderbg6").css("display", "none");
                                $(".content").css("display", "block");
                            }
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);
                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            }
        });
    }


	



//部门图标	
    function yinsdata(department) {
        var bumenico;
        if (department == '财政局') {
            bumenico = 'caizj';
        } else if (department == '房管局') {
            bumenico = 'fanggj';
        } else if (department == '交通局') {
            bumenico = 'jiaotj';
        } else if (department == '地税局') {
            bumenico = 'disj';
        } else if (department == '工商局') {
            bumenico = 'gongsj';
        } else if (department == '公安局') {
            bumenico = 'gongaj';
        } else if (department == '规划局') {
            bumenico = 'guihj';
        } else if (department == '国税局') {
            bumenico = 'guosj';
        } else if (department == '国土局') {
            bumenico = 'guotj';
        } else if (department == '建设局') {
            bumenico = 'jiansj';
        } else if (department == '建筑类审批') {
            bumenico = 'jianzlsp';
        } else if (department == '教育局') {
            bumenico = 'jiaoyj';
        } else if (department == '经济类审批') {
            bumenico = 'jingjlsp';
        } else if (department == '人社局') {
            bumenico = 'rensj';
        } else if (department == '社会类审批') {
            bumenico = 'shehlsp';
        } else if (department == '食药监局') {
            bumenico = 'shiyjj';
        } else if (department == '统筹局') {
            bumenico = 'tongcj';
        } else if (department == '卫生局') {
            bumenico = 'weisj';
        } else if (department == '文体旅游局') {
            bumenico = 'wentlyj';
        } else if (department == '消防大队') {
            bumenico = 'xiaofdd';
        } else if (department == '烟草专卖局') {
            bumenico = 'yanczmj';
        } else if (department == '质监局') {
            bumenico = 'zhijj';
        } else {
            bumenico = 'bszn';
        }
        return bumenico;
    }

    //状态码
    function zhuangtai(orderstatus) {
        var viewstatus;
        if (orderstatus == 4000) {
            viewstatus = "生成中";
        } else if (orderstatus == 4001) {
            viewstatus = "平台分配";
        } else if (orderstatus == 4002) {
            viewstatus = "商家分配";
        } else if (orderstatus == 4003) {
            viewstatus = "订单确认";
        } else if (orderstatus == 4004) {
            viewstatus = "待付款";
        } else if (orderstatus == 4005) {
            viewstatus = "处理中(正常)";
        } else if (orderstatus == 4006) {
            viewstatus = "处理中(异常)";
        } else if (orderstatus == 4007) {
            viewstatus = "订单取消";
        } else if (orderstatus == 4008 || orderstatus == 4009) {
            viewstatus = "已完成";
        } else if (orderstatus == 4010 || orderstatus == 4012) {
            viewstatus = "订单不受理";
        } else if (orderstatus == 4011 || orderstatus == 4013) {
            viewstatus = "审核未通过";
        } else if (orderstatus == 4014) {
            viewstatus = "订单关闭";
        } else if (orderstatus == 4015 || orderstatus == 4019) {
            viewstatus = "退款审核中";
        } else if (orderstatus == 4016) {
            viewstatus = "已退款";
        } else if (orderstatus == 4017) {
            viewstatus = "退款审核通过";
        } else if (orderstatus == 4018) {
            viewstatus = "退款审核失败";
        } else if (orderstatus == 4020) {
            viewstatus = "其他人接单";
        } else if (orderstatus == 4021) {
            viewstatus = "退款中";
        } else if (orderstatus == 4022 || orderstatus == 4023) {
            viewstatus = "申诉中";
        } else if (orderstatus == 4024) {
            viewstatus = "退款平台驳回";
        } else if (orderstatus == 4025) {
            viewstatus = "无法受理";
        } else if (orderstatus == 4026) {
            viewstatus = "考虑中";
        }
        return viewstatus;
    }

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
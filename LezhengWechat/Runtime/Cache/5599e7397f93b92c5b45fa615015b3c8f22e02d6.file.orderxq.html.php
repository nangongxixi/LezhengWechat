<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 14:47:48
         compiled from "./LezhengWechat/Home/View\Myinfo\orderxq.html" */ ?>
<?php /*%%SmartyHeaderCode:2419258a3ee9a0d3230-96253961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5599e7397f93b92c5b45fa615015b3c8f22e02d6' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\orderxq.html',
      1 => 1489654726,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2419258a3ee9a0d3230-96253961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a3ee9a26d51',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3ee9a26d51')) {function content_58a3ee9a26d51($_smarty_tpl) {?><html>
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
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?> 
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>订单详情
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg mianzexy_padd">
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin orderinfo_dzfcolor" id="orderstatus"></div></div>
            <div class="orderinfo_xqtitle">订单状态：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="ordernumber"></div></div>
            <div class="orderinfo_xqtitle">订单编号：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="operatetime"></div></div>
            <div class="orderinfo_xqtitle">下单时间：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="paytime">--:--:--</div></div>
            <div class="orderinfo_xqtitle">付款时间：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="paytype">------</div></div>
            <div class="orderinfo_xqtitle">付款方式：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="transactionid">------</div></div>
            <div class="orderinfo_xqtitle">付款流水：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin"><span class="order_status"> ￥<span id="amountmoney"></span></span></div></div>
            <div class="orderinfo_xqtitle">付款金额：</div>
        </div>
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="priceexplain">------</div></div>
            <div class="orderinfo_xqtitle">定价备注：</div>
        </div>
        <div class="orderinfo_xqitem input_title yinc">
            <div class="orderinfo_con"><div class="orderinfo_conin"><span id="documentexplain">------</span></div></div>
            <div class="orderinfo_xqtitle">所需资料：</div>
        </div>
		<div class="orderinfo_xqitem input_title yinc" style="display:none">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="refundtime">--:--:--</div></div>
            <div class="orderinfo_xqtitle">退款时间：</div>
        </div>
        <div class="orderinfo_xqitem input_title yinc" style="display:none">
            <div class="orderinfo_con"><div class="orderinfo_conin"><span id="refundmoney">------</span></div></div>
            <div class="orderinfo_xqtitle" >退款金额：</div>
        </div>
		<div class="orderinfo_xqitem input_title yinc" style="display:none">
            <div class="orderinfo_con"><div class="orderinfo_conin"><span id="refundremarks">------</span></div></div>
            <div class="orderinfo_xqtitle">退款备注：</div>
        </div>
        <div class="clear"></div>
    </div>   
    <div class="fenge"></div>
    <div class="baibg mianzexy_padd">
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="productname"></div></div>
            <div class="orderinfo_xqtitle">服务类型：</div>
        </div>
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="nameoffirm"></div></div>
            <div class="orderinfo_xqtitle">企业名称：</div>
        </div>
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="legalperson"></div></div>
            <div class="orderinfo_xqtitle">企业法人：</div>
        </div>
		
		
		
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="consumername"></div></div>
            <div class="orderinfo_xqtitle">预约客户：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="customphone"></div></div>
            <div class="orderinfo_xqtitle">电话号码：</div>
        </div>		
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="serviceareaname">------</div></div>
            <div class="orderinfo_xqtitle">办事区域：</div>
        </div>
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="fetchareaname">------</div></div>
            <div class="orderinfo_xqtitle">取件区域：</div>
        </div>
		
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="address">------</div></div>
            <div class="orderinfo_xqtitle">预约地址：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="appointmenttime">--:--:--</div></div>
            <div class="orderinfo_xqtitle">预约时间：</div>
        </div>
        <div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="orderinfo_conin" id="ConsumerMsg">------</div></div>
            <div class="orderinfo_xqtitle">留言内容：</div>
        </div>
        <div class="clear"></div>
    </div> 

    <div class="fenge"></div>
    <div class="conntbottom_line"></div>
    <div class="baibg all_padd all_text input_title mianzxy success_box">
        如果您有任何问题，可与我们联系！
        <a href="tel:962562">
            <div>
                <img src="<?php echo @IMG_URL;?>
tel.png" class="tel_ico">
                <span class="success_tel">962562</span>
            </div>
        </a>
    </div>
</div>
<div class="conntbottom_line"></div>
<div class="submit_button" id="submit"  style="display:none">付款</div>

<SCRIPT type="text/javascript">
	$("#submit").on("click",function(){
			alert("微信支付接口申请中");
		});
    $(function () {		
        //获取订单详情数据
        var orderid = "<?php echo $_GET['orderid'];?>
";
        $.ajax({
            type: "POST",
            url: "../../../myinfo/orderinfoaction",
            data: {
                "orderid": orderid
            },
            success: function (msg) {
                var data = JSON.parse(msg);
                //根据订单状态显示列表样式
                var viewstatus;
                var orderstatus = data.orderstatus;
                if (orderstatus == 4000) {
                                viewstatus = "生成中";
                            }
                            if (data.department == '') {
                                data.department = '代办业务';
                            }
                            if (orderstatus == 4001) {
                                viewstatus = "平台分配";
                            }
                            if (orderstatus == 4002) {
                                viewstatus = "商家分配";
                            }
                            if (orderstatus == 4003) {
                                viewstatus = "订单确认";
                            }
                            if (orderstatus == 4004) {
                                viewstatus = "待付款";
                            }
                            if (orderstatus == 4005) {
                                viewstatus = "处理中(正常)";
							} else if (orderstatus == 4006) {
								viewstatus = "处理中(异常)";
                            }
                            if (orderstatus == 4007) {
                                viewstatus = "订单取消";
                            }
                            if (orderstatus == 4008 || orderstatus == 4009) {
                                viewstatus = "已完成";
                            }
                            if (orderstatus == 4010 || orderstatus == 4012) {
                                viewstatus = "订单不受理";
                            }
                            if (orderstatus == 4011 || orderstatus == 4013) {
                                viewstatus = "审核未通过";
                            }
                            if (orderstatus == 4014) {
                                viewstatus = "订单关闭";
                            }
                            if (orderstatus == 4015 || orderstatus == 4019) {
                                viewstatus = "退款审核中";
                            }
                            if (orderstatus == 4016) {
                                viewstatus = "已退款";
                            }
                            if (orderstatus == 4017) {
                                viewstatus = "退款审核通过";
                            }
                            if (orderstatus == 4018) {
                                viewstatus = "退款审核失败";
                            }
                            if (orderstatus == 4020) {
                                viewstatus = "其他人接单";
                            }
                            if (orderstatus == 4021) {
                                viewstatus = "退款中";
                            }
                            if (orderstatus == 4022 || orderstatus == 4023) {
                                viewstatus = "申诉中";
                            }
                            if (orderstatus == 4024) {
                                viewstatus = "退款平台驳回";
                            }
                            if (orderstatus == 4025) {
                                viewstatus = "无法受理";
                            }
                            if (orderstatus == 4026) {
                                viewstatus = "考虑中";
                            }
						//显示付款按钮
						if (orderstatus == 4004) {
                            $("#submit").css("display","block");
                        }
                $("#orderstatus").html(viewstatus);
                $("#ordernumber").html(data.ordernumber);
                $("#operatetime").html(data.operatetime);//下单时间
                if (data.PayStatus !== 1 || data.PayStatus !== 2) {
                    if (data.paytype == 6001) {
                        $("#paytype").html("现金");
                    }
                    if (data.paytype == 6002) {
                        $("#paytype").html("银联");
                    }
                    if (data.paytype == 6003) {
                        $("#paytype").html("支付宝");
                    }
                    if (data.paytype == 6004) {
                        $("#paytype").html("微信钱包");
                    }
                }
                if (data.paytime !== "") {
                    $("#paytime").html(data.paytime);
                }
                if (data.transactionid != null) {
                    $("#transactionid").html(data.transactionid);
                }
                if (data.appointmenttime !== "") {
                    $("#appointmenttime").html(data.appointmenttime);
                }
				if (data.priceexplain !== "") {
                    $("#priceexplain").html(data.priceexplain);
                }
                if (data.address !== "") {
                    $("#address").html(data.address);
                }
                if (data.ConsumerMsg !== "") {
                    $("#ConsumerMsg").html(data.consumermsg);
                }
				if (data.documentexplain !== "") {
                    $("#documentexplain").html(data.documentexplain);
                }				
				//企业名称
				if (data.nameoffirm !== "") {
                    $("#nameoffirm").html(data.nameoffirm);
                }
				//法人
				if (data.legalperson !== "") {
                    $("#legalperson").html(data.legalperson);
                }
				//显示退款信息
				if (data.orderstatus == 4015 || data.orderstatus == 4016 || data.orderstatus == 4017 || data.orderstatus == 4018 || data.orderstatus == 4019 || data.orderstatus == 4021 || data.orderstatus == 4024){
					$(".yinc").css("display","block");					
					if (data.refundremarks !== "") {
						$("#refundremarks").html(data.refundremarks);
					}
					if (data.refundtime !== "") {
						$("#refundtime").html(data.refundtime);
					}
					if (data.refundmoney !== "") {
						$("#refundmoney").html(data.refundmoney);
					}
				}				
				$("#fetchareaname").html(data.fetchareaname);
				$("#serviceareaname").html(data.serviceareaname);
                $("#amountmoney").html(data.amountmoney);
                $("#productname").html(data.productname);
                $("#consumername").html(data.consumername);
                $("#customphone").html(data.phonenumber);
			
				
            }
        });

    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
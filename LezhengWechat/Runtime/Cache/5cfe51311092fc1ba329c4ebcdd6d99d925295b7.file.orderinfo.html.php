<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 14:57:48
         compiled from "./LezhengWechat/Home/View\Myinfo\orderinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2090258a3ac4d57f4c8-91903465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfe51311092fc1ba329c4ebcdd6d99d925295b7' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\orderinfo.html',
      1 => 1490684265,
      2 => 'file',
    ),
    'c1e9bd7c9270edc7beff77d2639ec9202584388a' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\baibgdefault.html',
      1 => 1490320102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090258a3ac4d57f4c8-91903465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a3ac4d96373',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3ac4d96373')) {function content_58a3ac4d96373($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
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
    <body class="baibg"> 
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?>
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>我的订单
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>  
    <div class="order_box baibg all_text input_title">
        <div class="left order_ico"><img src="<?php echo @IMG_URL;?>
newsico3.png" id="bumenico" style="margin-top:8px"></div>
        <div class="right order_right order_padd">
            <div class="order_title right">                               
                <span class="left ordertitle_xqfont" id="productname"></span>
                <span class="right order_status" id="orderstatus"></span>
            </div>
            <div class="clear"></div>            
            <div class='feigcs_sj orderinfo_padd'>订单编号： <span id="ordernumber"></span></div>
            <div class='feigcs_sj'><span id="consumername"></span>： <span id="customphone"></span></div>            
        </div>
        <div class='clear'></div>
        <div class="bottom_line"></div>       
        <div class='order_cancel_button orderinfo_button' id="viewmore">查看更多</div> 
        <a href="" id="phonenumber">
            <div class='order_cancel_button'>联系客服</div>
        </a>       
        <div class='clear'></div>
    </div>
	<!--评价详情-->
	<div id="pingjxq" style="display:none">
		<div class="fenge fenge_bg"></div>
		<div class="baibg all_padd input_title">
			<div class="input_padd bottom_line">
				<div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">订单评价</div>
			</div>
			<div class="all_text orderinfo_pj"></div>   
		</div>
	</div>
    <div class="fenge fenge_bg"></div>
    <div class="baibg all_padd input_title">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">受理状态</div>
            <div class="clear"></div> 
        </div>		
        <div id="step"></div>
    </div> 
</div>


<SCRIPT type="text/javascript">
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
				//关于图标
				var bumenico = sessionStorage.getItem("bumenico");
				var imgsrc = '<?php echo @DEFAULT_URL;?>
api/v1/Files?filename=' + data.picurl;				
				if(data.picurl!==null){
					$("#bumenico").attr("src",imgsrc);
				}
				if(data.picurl==null){
					$("#bumenico").attr("src",bumenico);
				}
				if(data.picurl==null && bumenico==null){
					$("#bumenico").attr("src","http://wx.joygov.com/Public/Home/img/bumenico/bszn.png");
				}				
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
				if(data.productname==''){
					$("#productname").html("代办业务");
				}else{
					$("#productname").html(data.productname);
				}			
                
                $("#ordernumber").html(data.ordernumber);
                $("#orderstatus").html(viewstatus);//保存状态以备后用
                $("#consumername").html(data.consumername);
                $("#customphone").html(data.phonenumber);
				var tel = "<?php echo $_SESSION['hotline'];?>
";				
                $("#phonenumber").attr("href", "tel:" + tel);
				sessionStorage.setItem('codesx', data.orderstatus);				
				if(data.iscomment == 1){					
					$("#pingjxq").css("display","block");					
					//获取评价详情
					$.ajax({
						type: "POST",
						url: "../../../myinfo/orderpingjaction",
						data: {
							"orderid": orderid
						},
						success: function (msg) {
							var data = JSON.parse(msg);
							$(".orderinfo_pj").html(data.contents);				
						}
					});
				}
            }
        });
        //查看更多
        $("#viewmore").on("click", function () {
            location.href = "../../../myinfo/orderxq/orderid/" + orderid;
            event.stopPropagation();
        });		
        //获取受理状态
        $.ajax({
            type: "POST",
            url: "../../../myinfo/orderstepaction",
            data: {
                "orderid": orderid
            },
            success: function (msg) {
                var data = JSON.parse(msg);				
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    if (data.datalist.length == (i+1)) {
                        //最新的一条                       
                        $("#step").prepend('<div class="orderinfo_status_box"><div class="all_text"><div class="orderinfo_status_lvda left"></div><div class="orderinfo_clz orderinfo_text_hei">' + data.datalist[i].stepname + '</div><div class="orderinfoht">' + data.datalist[i].remark + '</div><div class="feigcs_sj">' + data.datalist[i].operatortime + '</div><div class="orderinfo_status_info bottom_line orderinfo_kongge right"></div></div></div><div class="clear"></div>');
                    } else {
                        $("#step").prepend('<div class="all_text"><div class="orderinfo_status_huidaico left"></div><div class="orderinfo_clz">' + data.datalist[i].stepname + '</div><div class="orderinfoht">' + data.datalist[i].remark + '</div><div class="feigcs_sj">' + data.datalist[i].operatortime + '</div><div class="orderinfo_status_info bottom_line orderinfo_kongge right"></div></div><div class="clear"></div>');                       
               
                    }					
                });
				$(document).ready(function(){
					var dd = sessionStorage.getItem('codesx');					
					if(dd == 4006){		
						$(".orderinfo_status_lvda").removeClass().addClass("orderinfo_status_ico").addClass("left");
						$(".orderinfo_status_huidaico").removeClass().addClass("orderinfo_status_lvdaico").addClass("left");							
					}
				});
				
				
            }
        });
		
		
		 
		

		
    });

			

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-04-17 09:58:30
         compiled from "./LezhengWechat/Home/View\Need\SurePersonal.html" */ ?>
<?php /*%%SmartyHeaderCode:56958c0ebbf429462-60500677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64b0f7caffbe97e07f94e401484b9d9cdb53f13f' => 
    array (
      0 => './LezhengWechat/Home/View\\Need\\SurePersonal.html',
      1 => 1491462376,
      2 => 'file',
    ),
    '942f110b495b1fb48e10e9dc936729fb67b330e5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1490320098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56958c0ebbf429462-60500677',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c0ebbf6e0a0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0ebbf6e0a0')) {function content_58c0ebbf6e0a0($_smarty_tpl) {?><html>
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
        <div class="clear"></div>
		<div class="input_padd input_paddmin">
            <span class="input_title">需&nbsp;&nbsp;求&nbsp;&nbsp;人：</span>&nbsp;<span class="input_box all_tex input_title" id="people"></span>               
        </div> 
        <div class="input_padd input_paddmin">
            <span class="input_title">手机号码：</span>&nbsp;<span class="input_box all_tex input_title" id="phone"></span>               
        </div>        
        <div class="input_padd input_paddmin">
            <span class="input_title">办事区域：</span>&nbsp;<span class="input_box all_tex input_title" id="area"></span>               
        </div>
        <div class="input_padd input_paddmin">
            <span class="input_title">取件区域：</span>&nbsp;<span class="input_box all_tex input_title" id="qujianarea"></span>               
        </div>
		<div class="input_padd input_paddmin">
            <span class="input_title">详细地址：</span>&nbsp;<span class="input_box all_tex input_title" id="address"></span>               
        </div>
		<div class="input_padd input_paddmin">
            <span class="input_title">需&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;求：</span>&nbsp;<span class="input_box all_tex input_title" id="message"></span>               
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
        if(address == null){
			address = "<?php echo $_SESSION['user']['address'];?>
";	
		}		
        var message = sessionStorage.getItem('message');        
		//办事区域		
        var area = sessionStorage.getItem('banshiarea');
		if(area == null){			
			area = "<?php echo $_SESSION['area'];?>
";
		}
		//取件区域		
        var qujianarea = sessionStorage.getItem('qujianarea');
		if(qujianarea == null){			
			qujianarea = "<?php echo $_SESSION['user']['areaname'];?>
";
		}
        var actionname = "<?php echo @ACTION_NAME;?>
";
        $("#people").html(people);
        $("#phone").html(phone);
        $("#address").html(address);
        $("#message").html(message);
        $("#area").html(area); 
		$("#qujianarea").html(qujianarea);
        //点击提交按钮时
        $("#submit").on("click", function () {
            var qujianareacode = sessionStorage.getItem('qujianareacode');
			if(qujianareacode==null){
				qujianareacode = "<?php echo $_SESSION['user']['area'];?>
";
			}
			var banshiareacode = sessionStorage.getItem('banshiareacode');
			if(banshiareacode==null){
				banshiareacode = "<?php echo $_SESSION['areacode'];?>
";
			}
			$.ajax({
				type: "POST",
				url: "../need/ShixiangAction",
				data: {
					"actionname": actionname,
					"people": people,
					"phone": phone,
					"address": address,
					"areacode": banshiareacode,
					"message": message,
					"qujianarea": qujianareacode
				},
				success: function (msg) { 
					//alert(msg);					
					var data = JSON.parse(msg);
					if (data.result == 1) {
						//推送订单通知		
						$.ajax({
							type: "GET",
							url: "../need/dingdantongzhi"				
						});
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
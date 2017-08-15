<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 15:26:43
         compiled from "./LezhengWechat/Home/View\Epsquery\sureaddinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1272558a14afc1b8f60-56553591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2207738dbe9d8c63f8605661dfc1cd73cf96abeb' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\sureaddinfo.html',
      1 => 1490340199,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272558a14afc1b8f60-56553591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a14afc3fb1f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a14afc3fb1f')) {function content_58a14afc3fb1f($_smarty_tpl) {?><html>
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
return.png"></a>信息确认
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
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="input_title" id="yewmc" style="margin-left:85px">------</div></div>
            <div class="orderinfo_xqtitle">业务名称：</div>
        </div>	
        <div class="clear"></div>
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="input_title" id="people" style="margin-left:85px">------</div></div>
            <div class="orderinfo_xqtitle">预约人：</div>
        </div>	
        <div class="clear"></div>
        <div class="input_padd input_paddmin">
            <span class="input_title">手机号码：</span>&nbsp;<span class="input_box all_tex input_title" id="phone"></span>               
        </div>
        <div class="input_padd input_paddmin">
            <span class="input_title">办事区域：</span>&nbsp;<span class="input_box all_tex input_title" id="area"></span>               
        </div>
        <div class="input_padd input_paddmin">
            <span class="input_title">取件区域：</span>&nbsp;<span class="input_box all_tex input_title" id="qujianarea"></span>               
        </div>
		<div class="orderinfo_xqitem input_title">
            <div class="orderinfo_con"><div class="input_title" id="address" style="margin-left:85px">------</div></div>
            <div class="orderinfo_xqtitle">详细地址：</div>
        </div>	
        <div class="clear"></div> 
        <!--
        <div class="input_padd input_paddmin">
            <span class="input_title">预约时间：</span>&nbsp;<span class="input_box all_tex input_title" id="choosetime"></span>    
        </div> 
        -->
        
        <div class="jianj"></div>
    </div>
    <div class="conntbottom_line"></div>
    <div class="fenge"></div>
    <div class="baibg message_kongge">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">留言内容</div>
            <div class="clear"></div> 
        </div>
        <div class="input_padd input_paddmin">
            <div class="all_tex left input_title" id="message"></div>           
            <div class="clear"></div> 
        </div>      
    </div>
    <div class="conntbottom_line"></div>
    <div class="mianzxy input_title">
        <input type="checkbox" name="isagree" id="isagree" checked="checked"/> 我已阅读并同意
        <a href="../epsquery/agreement"><span class="mianzxy_text">《免责协议》</span></a>
        <div class="mianzxy_text">● 请核对信息，我们将与您取得联系，请耐心等待。</div>
    </div>
    <div class="submit_button" id="submit">确认提交</div>
</div>

<SCRIPT type="text/javascript">

    $(function () {        
        var productname = sessionStorage.getItem('yewmc');
        var productcode = sessionStorage.getItem('shixiangcode');     
        var people = sessionStorage.getItem('people');
        var phone = sessionStorage.getItem('phone');		
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
        var address = sessionStorage.getItem('address');
        if(address == null){
			address = "<?php echo $_SESSION['user']['address'];?>
";	
		}   
        var message = sessionStorage.getItem('message');         
        $("#yewmc").html(productname);
        $("#people").html(people);
        $("#qujianarea").html(qujianarea);
        $("#area").html(area);
        $("#phone").html(phone);
        $("#address").html(address);        
        $("#message").html(message);		
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
            if ($("#isagree").is(':checked')) {
            } else {
                layer.open({
                    content: '必须选择已阅读',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../need/shixiangaction",
                data: {
                    "productname": productname,
                    "productcode": productcode,
                    "people": people,
                    "phone": phone,
                    "address": address,                    
                    "message": message,
                    "qujianarea": qujianareacode,
                    "areacode": banshiareacode                    
                },
                success: function (msg) {
					//alert(msg);
                    var data = JSON.parse(msg);
                    if (data.msgcount != 0) { 
						//推送订单通知		
						$.ajax({
							type: "GET",
							url: "../need/dingdantongzhi"				
						});
                        location.href = "../epsquery/submitsuccess";
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
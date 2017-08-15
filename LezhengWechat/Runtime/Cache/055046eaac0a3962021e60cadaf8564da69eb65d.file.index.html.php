<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 11:24:34
         compiled from "./LezhengWechat/Home/View\Myinfo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:861958a2911f915fc1-82894829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '055046eaac0a3962021e60cadaf8564da69eb65d' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\index.html',
      1 => 1490671371,
      2 => 'file',
    ),
    'ebc31d22f460971382f009c2815fda0fb1d88763' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\MyinfoDefault.html',
      1 => 1490320111,
      2 => 'file',
    ),
    'f340f313b0e740fd9aa593e3c8217f702f8b9fea' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\bottom.html',
      1 => 1490670101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '861958a2911f915fc1-82894829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a2911fbcd56',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a2911fbcd56')) {function content_58a2911fbcd56($_smarty_tpl) {?><html>
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
    <body class='myinfobg'>
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?>
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>个人中心
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div> 
    <div class='head_box'>
        <div class="myinfo_headimg"><img src="
		<?php if ($_SESSION['user']['headpath']==''){?>
		<?php echo @IMG_URL;?>
toux.png
		<?php }else{ ?>
		<?php echo @DEFAULT_URL;?>
api/v1/Files?filename=<?php echo $_SESSION['user']['headpath'];?>

		<?php }?>
		" class="userheadimg myinfo_headimg_border "></div>   
        <div class="myinfo_text input_title all_text" id="username"></div><div class="myinfo_name">成都市<span id="area"></span></div>  
    </div>
    <!--按钮begin-->
    <div class="myinfo_button" id="feigechuanshu">
        <div><img src="<?php echo @IMG_URL;?>
myinfo_fgcs.png" class="myinfo_ico"></div> 
        <div class="input_title"><span class="left">飞鸽传书</span>&nbsp;&nbsp;<span class="feigecs_weid left" style="display:none">&nbsp;&nbsp;<span id="weid"></span>&nbsp;条未读</span></div>         
        <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="myinfo_jiantou"></div>            
    </div> 
    <div class="myinfo_button" id="orderlist">
        <div><img src="<?php echo @IMG_URL;?>
myinfo_dd.png" class="myinfo_ico"></div> 
        <div class="input_title">&nbsp;我的订单</div>         
        <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="myinfo_jiantou"></div>
    </div> 
    <div class="myinfo_button" id="myyuyue">
        <div><img src="<?php echo @IMG_URL;?>
myinfo_yy.png" class="myinfo_ico"></div> 
        <div class="input_title">&nbsp;我的预约</div>         
        <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="myinfo_jiantou"></div>            
    </div> 
    <div class="myinfo_button" id="gerensz">
        <div><img src="<?php echo @IMG_URL;?>
myinfo_sz.png" class="myinfo_ico"></div> 
        <div class="input_title">&nbsp;个人设置</div>         
        <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="myinfo_jiantou"></div>            
    </div>
	<?php if ($_SESSION['returnindex']['myinfo']=='true'){?>
		<div class="return_index" id="return_index"></div>
	<?php }?>
	<?php echo session("returnindex.myinfo",null);?>

	<?php /*  Call merged included template "../Common/bottom.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '861958a2911f915fc1-82894829');
content_58d9d772cd274($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../Common/bottom.html" */?>
    <!--按钮end-->
</div>
<SCRIPT type="text/javascript">
    $(function () {
		
		//给区域赋值		
		var area = "<?php echo $_SESSION['user']['areaname'];?>
"; 
		$("#area").html(area);		
        
        //名称
        var username = "<?php echo $_SESSION['user']['username'];?>
";
        if (username !== ''){
            $("#username").html(username);
        }else{
			$("#username").html("暂无");
		}
        //点击头像
        $(".userheadimg").on("click", function () {
            $(this).addClass("baibg").siblings().removeClass("baibg");
            location.href = "../myinfo/setinfo";
        });        
        //选择区域
        $("#area").on("click", function () {
            $(this).addClass("baibg").siblings().removeClass("baibg");
            location.href = "../need/AddressAreaSelect";
        });
        //点击具体部门的时候
        $("#feigechuanshu").on("click", function () {
            $(this).addClass("baibg").siblings().removeClass("baibg");
            location.href = "../myinfo/feigechuanshu";
        });
        //点击具体部门的时候
        $("#orderlist").on("click", function () {
            $(this).addClass("baibg").siblings().removeClass("baibg");
            location.href = "../myinfo/orderlist";
        });
        //点击具体部门的时候
        $("#myyuyue").on("click", function () {
            $(this).addClass("baibg").siblings().removeClass("baibg");
            location.href = "../myinfo/myyuyue";
        });
        $("#gerensz").on("click", function () {
            $(this).addClass("baibg").siblings().removeClass("baibg");
            location.href = "../myinfo/setinfo";
        });
        $.ajax({
            type: "POST",
            url: "../myinfo/WeiduAction",           
            success: function (msg) {               
                var data = JSON.parse(msg);
                if (data.count !==0) {
                    $(".feigecs_weid").css("display","block");
                    $("#weid").html(data.count);
                }
            }
        });
    });
	
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 11:24:34
         compiled from "D:\Apache24\htdocs\LezhengWechat\Home\View\Common\bottom.html" */ ?>
<?php if ($_valid && !is_callable('content_58d9d772cd274')) {function content_58d9d772cd274($_smarty_tpl) {?>
<SCRIPT type="text/javascript">
    $(function(){
        //点击右上角的头像图标
        $(".headimg").on("click",function(){
            //alert("请跳转到个人中心");
            location.href = "../myinfo/index";
        });        
    });
	/*
	//返回首页(tuodong)
	mobile_move();
	function mobile_move(){
		 // 获取节点
		var block = document.getElementById("return_index");
		var oW, oH;
		// 绑定touchstart事件
		block.addEventListener("touchstart", function (e) {
			console.log(e);
			var touches = e.touches[0];
			oW = touches.clientX - block.offsetLeft;
			oH = touches.clientY - block.offsetTop;			
			//alert(block.offsetTop);
			//alert(touches.clientY);
			//阻止页面的滑动默认事件
			document.addEventListener("touchmove", defaultEvent, false);
		}, false)

		block.addEventListener("touchmove", function (e) {
			var touches = e.touches[0];
			var oLeft = touches.clientX - oW;
			var oTop = touches.clientY - oH;
			var oBottom = touches.clientY + oH;			
			if (oLeft < 0) {
				oLeft = 0;
			} else if (oTop<0){
				oTop = 0;
			//612为窗口高度
			} else if (oTop>612){
				oTop = 612+"px";
			}else if (oLeft > document.documentElement.clientWidth - block.offsetWidth) {
				oLeft = (document.documentElement.clientWidth - block.offsetWidth);
			}
			block.style.left = oLeft + "px";
			block.style.top = oTop + "px";
		}, false);
		block.addEventListener("touchend", function () {
			document.removeEventListener("touchmove", defaultEvent, false);
		}, false);
		function defaultEvent(e) {
			e.preventDefault();
		}				
	}
	*/
	//点击返回首页 
	$("#return_index").on("click",function(){		
		location.href = "../index/index";
	});
</SCRIPT><?php }} ?>
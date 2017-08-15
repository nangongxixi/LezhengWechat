<?php /* Smarty version Smarty-3.1.6, created on 2017-03-22 10:06:33
         compiled from "./LezhengWechat/Home/View\Myinfo\ModyAddress.html" */ ?>
<?php /*%%SmartyHeaderCode:798358d1dc29208491-06964788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32db531002722023fd2f80b2d7347f4a06f7b6b4' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\ModyAddress.html',
      1 => 1490147943,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1488524575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798358d1dc29208491-06964788',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58d1dc292e95c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d1dc292e95c')) {function content_58d1dc292e95c($_smarty_tpl) {?><html>
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
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?> 
        
<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>修改地址
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="setinfo_button setinfo_nichen">
        <div class="all_padd">
            <div class="input_title">所在区域<span class="right setinfo_mingc" id="area"></span></div>			
            <img src="<?php echo @IMG_URL;?>
jiantou.png" class="setinfo_jiantou setinfo_jiantou1">
            <div class="bottom_line"></div>
        </div>         
    </div>
    <div class="baibg all_padd">
        <div class="input_padd">
            <span class="input_title">详细地址</span>            
            <input type="text" name="address" value="" id="address" maxlength="100" class="input_box all_tex address_input" />
            <div class="address" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>              
    </div>       
    <div class="bottom_line"></div> 
    <div class="submit_button">确认</div>
</div>   
<SCRIPT type="text/javascript">
    $(function () {		
		//给区域赋值		
		var area = "<?php echo $_SESSION['user']['areaname'];?>
"; 
		$("#area").html(area);
		//给地址赋值		
		var address = "<?php echo $_SESSION['user']['address'];?>
";		
		if(address !== null){
			$("#address").val(address);
		}else{
			$("#address").val("暂无");
		}		
		
        //选择区域
        $("#area").on("click", function () {
            location.href = "../need/AddressAreaSelect";
        });
		
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
			$("#address").css("text-align","left");
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
            var address = $.trim($("#address").val());			
            if (address == '') {
                layer.open({
                    content: '详细地址不能为空',
                    time: 2,
                    shadeClose: false
                });
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../myinfo/modymyinfoaction",
                data: {
                    "address":address
                },
                success: function (msg) {
					alert(msg);
                    var data = JSON.parse(msg);
                    if ('1' == data.result) {
                        layer.open({
                            content: '操作成功',                           
                            shadeClose: false,
                            time: 2,
                            end: function () {
                                location.href = "../myinfo/setinfo";
                            }
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
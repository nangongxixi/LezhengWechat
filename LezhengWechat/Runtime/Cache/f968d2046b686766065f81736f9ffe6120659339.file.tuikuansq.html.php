<?php /* Smarty version Smarty-3.1.6, created on 2017-03-16 17:16:13
         compiled from "./LezhengWechat/Home/View\Myinfo\tuikuansq.html" */ ?>
<?php /*%%SmartyHeaderCode:98758b7d24ae97c81-85931768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f968d2046b686766065f81736f9ffe6120659339' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\tuikuansq.html',
      1 => 1489654380,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1488524575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98758b7d24ae97c81-85931768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58b7d24b2e7a5',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7d24b2e7a5')) {function content_58b7d24b2e7a5($_smarty_tpl) {?><html>
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
return.png"></a>申请退款
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>  
    <div class="baibg mianzexy_padd">
        <textarea name="content" class="pingjia_area" id="textarea" placeholder="请告诉我们，您退款的主要原因…"></textarea>
    </div>
    <div class="fenge"></div> 
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
    <div class="conntbottom_line"></div>
    <div class="mianzxy input_title" id="tishi">        
        ● 您确定要申请退款吗？申请退款后不可取消。
    </div>
</div>
<div class="submit_buttonhui" id="submit" onclick="">下一步</div>
<SCRIPT type="text/javascript">
    //图片上传
    /*
     $('#uploadphoto').localResizeIMG({
     width: 400,
     quality: 1,
     success: function (result) {
     var submitData = {
     base64_string: result.clearBase64,
     };
     $.ajax({
     type: "POST",
     url: "<?php echo @LIB_URL;?>
upload.php",
     data: submitData,
     dataType: "json",
     success: function (data) {
     if (0 == data.status) {
     return false;
     } else {
     var attstr = '<img width="80" height="80" class="imglist_img" src="' + 'http://renheapp.sczmgk.com:5680/api/v1/Files?filename=' + data.picname + '">';
     $(".imglist").append(attstr);
     return false;
     }
     },
     complete: function (XMLHttpRequest, textStatus) {
     },
     error: function (XMLHttpRequest, textStatus, errorThrown) { //上传失败 
     alert(' 请检查您的图片大小和格式');
     }
     });
     }
     });
     */
	 //电话
	var textarea = $("#textarea").val();    
    $("#textarea").blur(function(){
		var textarea = $("#textarea").val();
        sessionStorage.setItem('sqtuik', textarea);	
    });
	$(function(){
		var sqtuik = sessionStorage.getItem('sqtuik');
		$("#textarea").val(sqtuik);
		//改变按钮颜色
		var textarea = $("#textarea").val();
		if (textarea !== '') {
			$(".submit_buttonhui").attr("class", "").addClass("submit_button");
			$("#tishi").addClass("mianzxy_text");
		} else {
			$(".submit_button").attr("class", "").addClass("submit_buttonhui");
		}		 
	});
	//改变按钮颜色
	$("#textarea").keyup(function () {	
		var textarea = $("#textarea").val();		
		if (textarea !== '') {
			$(".submit_buttonhui").attr("class", "").addClass("submit_button");
			$("#tishi").addClass("mianzxy_text");
		} else {
			$(".submit_button").attr("class", "").addClass("submit_buttonhui");
		}
	});
    //点击提价按钮
    $(document).on("click", ".submit_button", function () {		
        var orderid = "<?php echo $_GET['orderid'];?>
";		
        var applyreasona = $.trim($("#textarea").val());
		var applyreason = sessionStorage.setItem('applyreason',applyreasona);
		var orderid = sessionStorage.setItem('orderid',orderid);
		var orderid4 = sessionStorage.getItem('orderid');
        if (applyreasona.length < 1) {
            layer.open({
                content: '原因不能为空',
                time: 2
            });
        } else {
            location.href="../../../myinfo/sureshenq";
        }
    });
</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
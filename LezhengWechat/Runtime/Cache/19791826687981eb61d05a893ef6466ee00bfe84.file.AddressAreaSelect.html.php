<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 11:44:23
         compiled from "./LezhengWechat/Home/View\Need\AddressAreaSelect.html" */ ?>
<?php /*%%SmartyHeaderCode:1931758c8ff9b8db110-52292053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19791826687981eb61d05a893ef6466ee00bfe84' => 
    array (
      0 => './LezhengWechat/Home/View\\Need\\AddressAreaSelect.html',
      1 => 1490148991,
      2 => 'file',
    ),
    '942f110b495b1fb48e10e9dc936729fb67b330e5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1490320098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931758c8ff9b8db110-52292053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c8ff9b9922d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8ff9b9922d')) {function content_58c8ff9b9922d($_smarty_tpl) {?><html>
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
return.png"></a>区域选择
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div style="line-height: 260%; padding-left: 3.5%; font-weight: bold" class="baibg input_title">成都市</div>    
    <div class="all_padd input_itemselect">        
        <div id="areainfo"></div>
        <div class="clear"></div>
    </div>    
</div>

<SCRIPT type="text/javascript">
    //保存被点击的值并跳转到上一页    
    $(function () {
        $.ajax({
            type: "GET",
            url: "../need/AreaSelectAction",
            success: function (msg) {
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    $("#areainfo").prepend('<div class="area_selectitem" onclick="" areacode="'+ data.datalist[i].areacode +'"   id="' + data.datalist[i].areaid + '" name="'+ data.datalist[i].areaname +'">' + data.datalist[i].areaname + '</div>');
                });
                //改变当前选中的项目的背景        
                var areaname = "<?php echo $_SESSION['user']['areaname'];?>
";
				$(".area_selectitem[name="+areaname+"]").removeClass("area_selectitem").addClass("area_selectitemred");
				//$(".area_selectitem:contains("+areaname+")").removeClass("area_selectitem").addClass("area_selectitemred");
            }
        });
    });

    //点击选项并保存项目
    $(document).on("click", ".area_selectitem", function () {
        var AddressAreaName= $(this).html();
        var addressareaid = $(this).attr("id");
        var addressareacode = $(this).attr("areacode");
		sessionStorage.setItem('AddressAreaName', AddressAreaName);
        sessionStorage.setItem('addressareaid', addressareaid);//把js获取到的sessionstorage区域值保存到PHP的session里面
		sessionStorage.setItem('addressareacode', addressareacode);
        $.ajax({
            type: "POST",
            url: "../myinfo/modymyinfoaction",
            data: {
                "AddressAreaName": AddressAreaName,
				"addressareacode":addressareacode
            },
			success:function(msg){
				//alert(msg);
				var data = JSON.parse(msg);
				if(data.result==1){					
					$("#" + addressareaid).removeClass("area_selectitem").addClass("area_selectitemred").siblings().removeClass("area_selectitemred").addClass("area_selectitem");
					self.location = document.referrer;
				}
			}
        });
    }); 

	$(document).on("click", ".area_selectitemred", function () {
        self.location = document.referrer;
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 22:36:26
         compiled from "./LezhengWechat/Home/View\Need\BanshiAreaSelect.html" */ ?>
<?php /*%%SmartyHeaderCode:833458d21ddf6e8888-04391362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b62cc5bfa28b9f18130c6fdb991fddd7e7a6c7d' => 
    array (
      0 => './LezhengWechat/Home/View\\Need\\BanshiAreaSelect.html',
      1 => 1490166785,
      2 => 'file',
    ),
    '942f110b495b1fb48e10e9dc936729fb67b330e5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1490320098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '833458d21ddf6e8888-04391362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58d21ddf79faa',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d21ddf79faa')) {function content_58d21ddf79faa($_smarty_tpl) {?><html>
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
                var banshiarea = sessionStorage.getItem('banshiarea');
				if(banshiarea == null){
					var banshiarea = "<?php echo $_SESSION['area'];?>
";	
				}
				var banshiareaid = sessionStorage.getItem('banshiareaid');
				$(".area_selectitem[name="+banshiarea+"]").removeClass("area_selectitem").addClass("area_selectitemred");
				//$(".area_selectitem:contains("+areaname+")").removeClass("area_selectitem").addClass("area_selectitemred");
				if(banshiareaid=='' || banshiareaid==null){				
					$(".area_selectitem[name="+banshiarea+"]").removeClass("area_selectitem").addClass("area_selectitemred");					
				}else{							
					$("#" + banshiareaid).addClass("area_selectitemred").siblings().removeClass("area_selectitemred").addClass("area_selectitem");;					
				}
            }
        });
    });    

    //点击选项并保存项目
    $(document).on("click", ".area_selectitem", function () {
        var banshiarea = $(this).html();
        var banshiareaid = $(this).attr("id");
        var banshiareacode = $(this).attr("areacode");
        sessionStorage.setItem('banshiarea', banshiarea);
        sessionStorage.setItem('banshiareacode', banshiareacode);  
        sessionStorage.setItem('banshiareaid', banshiareaid);  
        var loginaction = sessionStorage.getItem('loginaction');
        if (loginaction == 'index'){
            sessionStorage.removeItem("loginaction"); 
            location.href = "../index/index";
            window.close();
        } else {            
            self.location=document.referrer;
        }
        //把js获取到的sessionstorage区域值保存到PHP的session里面
        $.ajax({
            type: "POST",
            url: "../need/BaocunAreaAction",
            data: {
                "banshiarea": banshiarea               
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
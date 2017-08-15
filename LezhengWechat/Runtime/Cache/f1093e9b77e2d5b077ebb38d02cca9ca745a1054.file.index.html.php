<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 11:21:32
         compiled from "./LezhengWechat/Home/View\Epsquery\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2826458b9084a13a3a3-62459730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1093e9b77e2d5b077ebb38d02cca9ca745a1054' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\index.html',
      1 => 1490671239,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2826458b9084a13a3a3-62459730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58b9084a2f791',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b9084a2f791')) {function content_58b9084a2f791($_smarty_tpl) {?><html>
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
return.png"></a>事项查询
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div> 
    <div class="all_padd sear_box">     
        <input type="text" name="sear" value="" placeholder="请输入关键字…" id="sear" class="sear_input"/>
        <img src="<?php echo @IMG_URL;?>
searimg.png" class="searimg">
        <div class="sear_button">搜索</div>
        <div class="sear" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput sear_del"></div>
    </div>
    <div class="bottom_line"></div>
    <div class="baibg">
        <div id="departmentinfo"></div>       
        <div class="clear"></div>
    </div> 
    <div class="bottom_line"></div>
	<?php if ($_SESSION['returnindex']['epsquery']=='true'){?>
		<div class="return_index" id="return_index"></div>
	<?php }?>
	<?php echo session("returnindex.epsquery",null);?>

</div>
<SCRIPT type="text/javascript">
    $(function () {
        //点击搜索输入框后
        $("#sear").on("click", function () {
            location.href = "../epsquery/search";
        });
        //获取区域数据        
        var areacode = "<?php echo $_SESSION['areacode'];?>
"; 
        $.ajax({
            type: "POST",
            url: "../Epsquery/DepartmentAction",
            data: {
                "areacode": areacode
            },
            success: function (msg) {
				//alert(msg);
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
				if (data.datalist.length==0) {
					$("#departmentinfo").html("<div class='myyuyue_null'>暂无事项数据…</div>");
				}
				var imgarr=new Array();
				$.each(data.datalist, function (i) {
					//保存部门图标和部门编码
					var picurls = [];//定义一个一维数组
					var code = data.datalist[i].code;
					var tubiao = data.datalist[i].picurl;					
					var ico = '"code":"'+code+'","tubiao":"'+tubiao+'"';
					imgarr.push(ico);
					var imgsrc = '<?php echo @DEFAULT_URL;?>
api/v1/Files?filename=' + data.datalist[i].picurl;
					if(data.datalist[i].picurl == null || data.datalist[i].picurl == ''){
						imgsrc = "<?php echo @IMG_URL;?>
toux.png";
					}
					//alert(imgsrc);
					$("#departmentinfo").prepend('<ul class="float-ul"><li onclick="" code="' + data.datalist[i].code + '" id="xian' + i + '"><div class="con"><img src="'+ imgsrc + '" class="department_item_img"><p class="department_item_text">' + data.datalist[i].title + '</p></div></li></ul>');
					var index = $(".department_item").length;								
					if (i != 0 && index % 4 == 0) {
						//alert($(".department_item").attr("id"));
						$("#xian" + (index - 3)).addClass("department_item_right");
					}
					//点击具体部门的时候
					$(document).on("click", "#xian"+i, function () {
						var code = $(this).attr("code");
						sessionStorage.setItem('bumencode', code);
						sessionStorage.setItem('imgsrc', imgsrc);
						location.href = "../Epsquery/ShixiangList";
					});					
				
				});				
				//把部门图标存入session
				$.ajax({
					type: "POST",
					url: "../Epsquery/ImgarrAction",
					data: {
						"imgarr": imgarr
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
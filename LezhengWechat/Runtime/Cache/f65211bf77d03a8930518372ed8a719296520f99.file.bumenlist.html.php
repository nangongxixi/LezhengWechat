<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 10:09:32
         compiled from "./LezhengWechat/Home/View\Appointment\bumenlist.html" */ ?>
<?php /*%%SmartyHeaderCode:442658abb70154fe90-50843808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f65211bf77d03a8930518372ed8a719296520f99' => 
    array (
      0 => './LezhengWechat/Home/View\\Appointment\\bumenlist.html',
      1 => 1489649747,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '442658abb70154fe90-50843808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58abb70170d40',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58abb70170d40')) {function content_58abb70170d40($_smarty_tpl) {?><html>
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
return.png"></a>预约查询
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
    <div class="baibg">
        <div class="bottom_line"></div>
        <div id="shixiangitem"></div>
        <div class="bottom_line"></div>
        <div class="clear"></div>
    </div>    
</div>
<SCRIPT type="text/javascript">
    $(function () {
        //点击搜索输入框后
        $("#sear").on("click", function () {
            location.href = "../Epsquery/search";
        });
        //展示列表areacode
        var areacode = "<?php echo $_SESSION['areacode'];?>
";
       
        var parentcode = "<?php echo $_GET['parentcode'];?>
";
        if (parentcode !== '') {
            var parentcode = "<?php echo $_GET['parentcode'];?>
";
        } else {
            var parentcode = "";
        }
        $.ajax({
            type: "POST",
            url: "../appointment/GetbushilistAction",
            data: {
                "areacode": areacode,
                "parentcode": parentcode
            },
            success: function (msg) {
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
					if(data.datalist[i].areacode == null){
						$("#shixiangitem").prepend('<div onclick="" class="shixiangitem shixiang_line" parentcode="' + data.datalist[i].servicecode + '"><img src="<?php echo @IMG_URL;?>
yuyueico.png" class="shixiangicon"><span class="input_title bumentitle">' + data.datalist[i].title + '</span></div>');
					} else {
						$("#shixiangitem").prepend('<div class="myyuyue_null">当前只有武侯区开通该功能…</div>');
						return false;
					}
				});
            }
        });
        //点击具体部门的时候
        $(document).on("click", ".shixiangitem", function () {
            var parentcode = $(this).attr("parentcode");
            var bumentitle = $(this).find(".bumentitle").html();
            $.ajax({
                type: "POST",
                url: "../appointment/GetbushilistAction",
                data: {
                    "areacode": areacode,
                    "parentcode": parentcode
                },
                success: function (msg) {
                    $("#shixiangitem").empty();
                    var data = JSON.parse(msg);
                    data.datalist = data.datalist.reverse();
                    $.each(data.datalist, function (i) {
						if(data.datalist[i].areacode == null){
							$("#shixiangitem").prepend('<div onclick="" class="shixiangitem shixiang_line" id="' + data.datalist[i].servicecode + '" parenttitle = "' + data.datalist[i].title + '"><img src="<?php echo @IMG_URL;?>
yuyueico.png" class="shixiangicon"><span class="input_title bumentitle">' + data.datalist[i].title + '</span></div>');
						} else {
							$("#shixiangitem").prepend('<div style="align-text:center">当前只有武侯区开通该功能…</div>');
							return false;
						}
						//限制字符个数
						$(document).ready(function(){
							$(".bumentitle").each(function(){
								var maxwidth=17;
								if($(this).text().length>maxwidth){
									$(this).text($(this).text().substring(0,maxwidth));
									$(this).html($(this).html()+' …');
								}
							});
						});
					});
                    $(document).on("click", ".shixiangitem", function () {
                        var parenttitle = $(this).attr("parenttitle");
                        var shxiiangcode = $(this).attr("id");
                        sessionStorage.setItem('parenttitle', parenttitle);
                        sessionStorage.setItem('shxiiangcode', shxiiangcode);
                        sessionStorage.setItem('bumentitle', bumentitle);
                        location.href = "../appointment/showlist";
                    });
					
                }
            });
        });
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
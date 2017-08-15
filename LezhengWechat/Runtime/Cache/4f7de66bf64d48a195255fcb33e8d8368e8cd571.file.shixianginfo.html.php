<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 10:25:40
         compiled from "./LezhengWechat/Home/View\Epsquery\shixianginfo.html" */ ?>
<?php /*%%SmartyHeaderCode:540458ae9d57bf0682-55136038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7de66bf64d48a195255fcb33e8d8368e8cd571' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\shixianginfo.html',
      1 => 1490667939,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '540458ae9d57bf0682-55136038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ae9d57e03af',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae9d57e03af')) {function content_58ae9d57e03af($_smarty_tpl) {?><html>
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
return.png"></a>关于事项
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>  
    <div class="baibg">
        <div class="bottom_line"></div>
        <div id="navtab">
            <ul class="title" >
                <li class="active" id="select1">基本信息</li>
                <li id="select2">办事资料</li>
                <li id="select3">收费说明</li>
                <li id="select4">用户点评</li>
            </ul> 
            <ul>
                <li>
                    <div class="shixiangitem"><img src="<?php echo @IMG_URL;?>
zxgg.png" class="shixiangicon"><span class="input_title shixiang_title"></span>
                    </div>
                </li>
            </ul>
            <ul class="baibg title_box all_text">
                <li id="jibenXX"></li>
                <li style="display:none" id="banshiZL"></li>
                <li style="display:none" id="shoufeiSM"></li>
                <li style="display:none">
                    <!--
                     <div class="pingjia_box">
                        <div class="left pingjia_left"><img src="<?php echo @IMG_URL;?>
userheadimg.png" class="userheadimg"></div>
                        <div class="right pingjia_right">
                            <div class="pingjia_title right">                               
                                <span class="left">用户名称</span>
                                <span class="right pingjia_date">2016.06.25</span></div>
                            <div class="clear"></div>
                            <div class="pingjia_content right">内容范德萨范德萨范德萨范德萨房贷首付多少</div> 
                        </div>
                    </div>                    
                    <div class="clear"></div>
                    -->
                    <div id="yonghuDP"></div>   
                    <div class="shixiang_line_mar" style="display:none"></div>
                    <div class="pinglun_more pingjia_title" style="display:none">查看更多评论</div>
                </li>
            </ul>
            <div class="clear"></div>        
        </div>
        <div class="bottom_line"></div>
        <div class="clear"></div>
    </div> 
    <div class="submit_button" id="submit">我要办理</div>	
</div>
<SCRIPT type="text/javascript">
    $(function () {
        //选项卡切换
        $("#navtab .title li").click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            var li = $(this).parent().next().next().children();
            $(li[index]).show().siblings().hide();
			var itemid = $(this).attr("id");			
            var itemid = sessionStorage.setItem('itemid', itemid);
            //var lid = $(".active").attr("id");            
        });
		//避免选项卡内容刷新			
		var itemid = sessionStorage.getItem('itemid');			
		$("#" + itemid).addClass("active").siblings().removeClass("active");//显示选项卡
		var index = $("#" + itemid).index();//当前悬想卡的索引
		var li = $("#" + itemid).parent().next().next().children();			
		$(li[index]).show().siblings().hide();//显示选项卡内容
			

        //获取除“评论”外的数据
        var shixiangcode = sessionStorage.getItem('shixiangcode');
		var imgsrc = sessionStorage.getItem('imgsrc');		
		$(".shixiangicon").attr("src",imgsrc);
        $.ajax({
            type: "POST",
            url: "../Epsquery/ShixianginfoAction",
            data: {
                "shixiangcode": shixiangcode
            },
            success: function (msg) {
                var data = JSON.parse(msg);
                $(".shixiang_title").html(data.productsname);
                $("#jibenXX").html(data.productsdescribe);
                $("#banshiZL").html(data.materialrequested);
                $("#shoufeiSM").html(data.remark);
				//限制字符个数
				$(document).ready(function(){
					$(".shixiang_title").each(function(){
						var maxwidth=17;
						if($(this).text().length>maxwidth){
							$(this).text($(this).text().substring(0,maxwidth));
							$(this).html($(this).html()+' …');
						}
					});
				});
            }
        });

        //获取“评论”
        var shixiangcode = sessionStorage.getItem('shixiangcode');
        $.ajax({
            type: "POST",
            url: "../Epsquery/YonghuDPAction",
            data: {
                "page": 1,
                "shixiangcode": shixiangcode
            },
            success: function (msg) {
                $("#yonghuDP").html("");
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                if (data.datalist.length > 0) {
                    $(".pinglun_more").css("display", "block");
                    $(".shixiang_line").css("display", "block");					
                    $.each(data.datalist, function (i) {
						var imgico = "<?php echo @DEFAULT_URL;?>
api/v1/Files?filename="+data.datalist[i].picurl;
						if(data.datalist[i].picurl == null || data.datalist[i].picurl == ''){
							imgico = "<?php echo @IMG_URL;?>
toux.png";
						}
                        $("#yonghuDP").prepend('<div class="pingjia_box"><div class="left pingjia_left"><img src="' + imgico + '" class="userheadimg setinfo_headimg pingjiahead"></div><div class="right pingjia_right"><div class="pingjia_title right"><span class="left">' + data.datalist[i].nickname + '</span><span class="right pingjia_date">' + data.datalist[i].commentstime + '</span></div><div class="clear"></div><div class="pingjia_content right">' + data.datalist[i].contents + '</div></div><div class="clear"></div><div class="bottom_line pingjialine"></div></div><div class="clear"></div>');
                    });
                }else{
                    $("#yonghuDP").html("<div style='text-align:center; color:#666'>暂无评论</div>");
                }
                $(".pinglun_more").on("click",function(){
                    location.href = "../epsquery/morePinglun";
                });
            }
        });

        //点击提交按钮时(提交的是个人代办事项)
        $("#submit").on("click", function () {
            location.href = "../epsquery/addinfo";
        });	
		
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
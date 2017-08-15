<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 14:43:53
         compiled from "./LezhengWechat/Home/View\Appointment\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:891958a25b6e652408-44162896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '639eff2647ca81c1c4789f6f4f53b16e03057ddd' => 
    array (
      0 => './LezhengWechat/Home/View\\Appointment\\showlist.html',
      1 => 1489715395,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '891958a25b6e652408-44162896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a25b6e8137f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a25b6e8137f')) {function content_58a25b6e8137f($_smarty_tpl) {?><html>
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
return.png"></a>预约
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>        
    <div class="baibg all_padd">

        <!--
        <div class="yuyue_box">            
            <div class="yuyue_date left"><span class="yuyue_day">25</span>2016.5</div>
            <div class="yuyue_info all_text left"><span class="input_title">时间段：</span>10:00-11:00<br><span class="input_title">可预约数量：</span>5</div>
            <div class="getvricode yuyue_button">确定预约</div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="bottom_line"></div> 
        -->
		
        <div id="list_box"></div>
    </div>
	<div class="orderbg" id="orderbg6" style="display:none">
		<div class="orderbg_yuan">
			<div class="order_null"></div>
		</div>                        
	</div>
</div>
<SCRIPT type="text/javascript">
    $(function () {
        //获取数据
        var areacode = "<?php echo $_SESSION['areacode'];?>
";
        var matterscode = sessionStorage.getItem('shxiiangcode');
        $.ajax({
            type: "POST",
            url: "../appointment/getshowlistaction",
            data: {
                "areacode": areacode,
                "matterscode": matterscode
            },
            success: function (msg) {			
                var data = JSON.parse(msg);
				if(data.result==0){					
					$("#orderbg6").css("display","block");
					return false;					
				}
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    var day = data.datalist[i].datatime.substring(8, 11);//截取"2017-02-22"中的22
                    var YN = data.datalist[i].datatime.replace("-", ".");//把"2017-02-22"变成“2017.02.22”
                    var YN = YN.substr(0, 7);//截取“2017.02”                    
                    var datatime = data.datalist[i].datatime;
                    var begintime = data.datalist[i].begintime;
                    var endtime = data.datalist[i].endtime;
                    $("#list_box").prepend('<div class="yuyue_box"><div class="yuyue_date left"><span class="yuyue_day">' + day + '</span>' + YN + '</div><div class="yuyue_info all_text left"><span class="input_title">时间段：</span>' + data.datalist[i].begintime + '-' + data.datalist[i].endtime + '<br><span class="input_title">可预约数量：</span><span id="yynum' + i + '">' + data.datalist[i].remainingcount + '</span></div><div id="num' + i + '" class="getvricode yuyue_button yuyue_hui" onclick="" datatime = "' + datatime + '" begintime = "' + begintime + '" endtime = "' + endtime + '">确定预约</div><div class="clear"></div></div><div class="clear"></div><div class="bottom_line"></div>');
                    var yynum = $("#yynum" + i).html();
                    if (yynum !== '0') {
                        $("#num" + i).removeClass("yuyue_button").removeClass("yuyue_hui").addClass("yuyue_buttonred");
                    }
                });
                //点击具体部门的时候
                $(document).on("click", ".yuyue_button", function () {
                    layer.open({
                        content: '暂无可预约数量',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                });
                $(document).on("click", ".yuyue_buttonred", function () {
                    var datatime = $(this).attr("datatime");
                    var begintime = $(this).attr("begintime");
                    var endtime = $(this).attr("endtime");
                    sessionStorage.setItem('datatime', datatime);
                    sessionStorage.setItem('begintime', begintime);
                    sessionStorage.setItem('endtime', endtime);
                    location.href = "../appointment/addinfo";
                });
            }
        });
    });
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
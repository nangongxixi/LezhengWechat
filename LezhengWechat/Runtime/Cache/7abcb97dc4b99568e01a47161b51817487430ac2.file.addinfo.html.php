<?php /* Smarty version Smarty-3.1.6, created on 2017-03-27 17:14:20
         compiled from "./LezhengWechat/Home/View\Appointment\addinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:3249658a26a99c694e5-20952126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7abcb97dc4b99568e01a47161b51817487430ac2' => 
    array (
      0 => './LezhengWechat/Home/View\\Appointment\\addinfo.html',
      1 => 1490585287,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3249658a26a99c694e5-20952126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a26a99ef5b0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a26a99ef5b0')) {function content_58a26a99ef5b0($_smarty_tpl) {?><html>
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
return.png"></a>信息填写
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">预约内容</div>
            <div class="clear"></div> 
        </div>
        <div class="jianj"></div>
        <div class="input_padd input_paddmin">
            <span class="input_title left">办事事项：&nbsp;</span><span class="input_box all_text input_title shixiangcss left" id="banshisx"></span>         
        </div>       
        <div class="input_padd input_paddmin">
            <span class="input_title">办事时间：</span>&nbsp;<span class="input_box all_text input_title" id="banshisj"></span>         
        </div>
        <!--
        <div class="input_padd input_paddmin">
            <span class="input_title">办事窗口：</span>&nbsp;<span class="input_box all_tex input_title" id="banshick"></span>               
        </div>
        <div class="input_padd input_paddmin">
            <span class="input_title">办事地址：</span>&nbsp;<span class="input_box all_tex input_title" id="banshidz"></span>   
        </div> 
        -->
    </div> 
    <div class="fenge"></div>
    <div class="baibg message_kongge">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">其他信息</div>
            <div class="clear"></div> 
        </div>       
        <div class="input_padd bottom_line">
            <span class="input_title">预约人：</span>&nbsp;&nbsp;&nbsp; <input type="text" name="people" value="" placeholder="请输入预约人姓名" id="people" class="input_box all_tex input_bg"/>
            <div class="people" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>   
        <div class="input_padd bottom_line  input_bg">
            <span class="input_title">证件类型：</span>&nbsp;<input type="text" name="certificate" value="" placeholder="请选择" id="certificate"  class="input_box all_tex"/>           
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="input_jiantou"></div>            
        </div>        
        <div class="input_padd bottom_line">
            <span class="input_title">证件号码：</span>&nbsp;<input type="text" name="certificatecode" value="" placeholder="所持证件号码" id="certificatecode" onblur="isInteger(this.value)"  maxlength="18" class="input_box all_tex input_bg"/>
            <div class="certificatecode" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>
        <div class="shuoming_color all_text">
            <span class="input_title shuoming_title">服务说明：</span> <br>  
            1.我们将会把预约成功与否，稍后发送至您的消息栏，请注意查收。<br>  
            2.根据预约时间到对应办事地方大厅自主取号终端机上取预约号。
            <div class="clear"></div> 
        </div>        
    </div>    
    <div class="conntbottom_line"></div>
    <div class="submit_button">提交申请</div>
</div>

<SCRIPT type="text/javascript">
    //删除输入,隐藏删除图标   
    //预约人
    $(".people").click(function () {
        $("#people").val('');
        sessionStorage.removeItem('people');
        $(".people").css("display", "none");
    });
    $("#people").focus(function () {
        var people = $("#people").val();
        if (people != '') {
            $(".people").css("display", "block");
        } else {
            $(".people").css("display", "none");
        }
    });
    $("#people").keyup(function () {        
        if (people != '') {
            $(".people").css("display", "block");
        } else {
            $(".people").css("display", "none");
        }
    });
	$("#people").blur(function(){
		var people = $("#people").val();        	
		sessionStorage.setItem('people', people);
	});
		
    //证件号码
    $(".certificatecode").click(function () {
        $("#certificatecode").val('');
        sessionStorage.removeItem('certificatecode');
        $(".certificatecode").css("display", "none");
    });
    $("#certificatecode").focus(function () {
        var certificatecode = $("#certificatecode").val();
        if (certificatecode != '') {
            $(".certificatecode").css("display", "block");
        } else {
            $(".certificatecode").css("display", "none");
        }
    });
    $("#certificatecode").keyup(function () {
        var certificatecode = $("#certificatecode").val();
        sessionStorage.setItem('certificatecode', certificatecode);
        if (certificatecode != '') {
            $(".certificatecode").css("display", "block");
        } else {
            $(".certificatecode").css("display", "none");
        }
    });
    //区域赋值
    $("#certificate").on("click", function () {
        location.href = "../Appointment/zhengjianselect";
    });    
    $(function () {
        var bumentitle = $.trim(sessionStorage.getItem('bumentitle'));
        var parenttitle = $.trim(sessionStorage.getItem('parenttitle'));
        var people = $.trim(sessionStorage.getItem('people'));
        var zhengjianID = $.trim(sessionStorage.getItem('zhengjianID'));
        var certificate = $.trim(sessionStorage.getItem('zhengjianName'));
        var certificatecode = $.trim(sessionStorage.getItem('certificatecode'));
        var shxiiangcode = $.trim(sessionStorage.getItem('shxiiangcode'));
        //var banshick = sessionStorage.getItem('banshick');
        //var banshidz = sessionStorage.getItem('banshidz');      
        $("#banshisx").html(parenttitle);
        //拼接预约时间“2017-02-22 10：00-11：00” 
        var datatime = sessionStorage.getItem('datatime');
        var begintime = sessionStorage.getItem('begintime');
        var endtime = sessionStorage.getItem('endtime');
        var YYSJ = datatime + '&nbsp;' + begintime + '-' + endtime;
        $("#banshisj").html(YYSJ);
        $("#people").val(people);
        $("#certificate").val(certificate);
        $("#certificatecode").val(certificatecode);
        //$("#banshick").html(banshick);
        //$("#banshidz").html(banshidz);
       
        //点击提交后
        $(".submit_button").on("click", function () {
            var people = $.trim(sessionStorage.getItem('people'));                     
            var certificate = $.trim($("#certificate").val());
            var certificatecode = $.trim(sessionStorage.getItem('certificatecode')).toUpperCase();			
            //验证身份证格式            
            if (people == '') {
                layer.open({
                    content: '必须填写预约人姓名',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }            
            if (certificate == '') {
                layer.open({
                    content: '请选择证件类型',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            if (certificatecode == '' || certificatecode.length < 18) {
                layer.open({
                    content: '请填写正确的证件号码',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
			if (certificatecode.match(/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/)) {                
            }else {
                layer.open({
                    content: '请填写正确的证件号码',
                    time: 2,
                    shadeClose: true
                });
                return false;                
            }
            //提交数据
            $.ajax({
                type: "POST",
                url: "../Appointment/AddinfoAction",
                data: {                   
                    "bumentitle": bumentitle,
                    "shxiiangcode": shxiiangcode,
                    "datatime": datatime,
                    "begintime": begintime,
                    "endtime": endtime,
                    "people": people,
                    "certificate": zhengjianID,
                    "certificatecode": certificatecode,
                    "servicetypename": parenttitle
                },
                success: function (msg) {
                    //alert(msg);
                    var data = JSON.parse(msg);
                    if (data.appointmentcode !== '') {
                        layer.open({
                            content: '预约成功',
                            time: 2,
                            shadeClose: true,
                            end: function(){
							   sessionStorage.removeItem("people");
                               sessionStorage.removeItem("certificate");
                               sessionStorage.removeItem("certificatecode");
							    //推送订单通知(传参以便改变通知的url)								
								$.ajax({
									type: "GET",
									url: "../need/dingdantongzhi?yuyue=1"				
								});
                               location.href = "../Appointment/SubmitSuccess";
                            }
                        });                        
                    } else {
                        layer.open({
                            content: data.errormsg,
                            time: 2,
                            shadeClose: false
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
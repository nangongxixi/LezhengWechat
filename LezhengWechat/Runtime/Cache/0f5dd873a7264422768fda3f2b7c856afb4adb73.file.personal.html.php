<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 16:35:20
         compiled from "./LezhengWechat/Home/View\Need\personal.html" */ ?>
<?php /*%%SmartyHeaderCode:15242589bfd8243ea98-60756690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5dd873a7264422768fda3f2b7c856afb4adb73' => 
    array (
      0 => './LezhengWechat/Home/View\\Need\\personal.html',
      1 => 1490671137,
      2 => 'file',
    ),
    '942f110b495b1fb48e10e9dc936729fb67b330e5' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1490320098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15242589bfd8243ea98-60756690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589bfd8260f88',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589bfd8260f88')) {function content_589bfd8260f88($_smarty_tpl) {?><html>
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
return.png"></a>个人事项
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd bottom_line">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">基本信息</div>
            <div class="clear"></div> 
        </div>       
        <div class="input_padd bottom_line">
            <span class="input_title">预约人：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="people" value="" placeholder="请输入预约人姓名（必填）" id="people" maxlength="20" class="input_box all_tex input_bg"/>
            <div class="people" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>        
        <div class="input_padd bottom_line">
            <span class="input_title">手机号码：</span>&nbsp;<input type="text" name="phone" value="" placeholder="请输入11位手机号（必填）" id="phone" maxlength="11" class="input_box all_tex"/>
            <div class="phone" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>
        <div class="input_padd bottom_line  input_bg">
            <span class="input_title">办事区域：</span>&nbsp;<input type="text" name="area" value="" placeholder="请选择（必填）" id="area" maxlength="11" class="input_box all_tex"/>           
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="input_jiantou" id="banshi"></div>            
        </div>
        <div class="input_padd bottom_line  input_bg">
            <span class="input_title">取件区域：</span>&nbsp;<input type="text" name="qujianarea" value="" placeholder="请选择（必填）" id="qujianarea" maxlength="11" class="input_box all_tex"/>           
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="input_jiantou" id="qujian"></div>            
        </div>        
        <div class="input_padd bottom_line">
            <span class="input_title">详细地址：</span>&nbsp;<input type="text" name="address" value="" placeholder="不用填写省市区（必填）" id="address" maxlength="30"  class="input_box all_tex input_bg"/>
            <div class="address" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>
        <!--
        <div class="input_padd">
            <span class="input_title">预约时间：</span>&nbsp;<input type="text" name="choosetime" value="" placeholder="请选择时间（必填）" id="choosetime"  class="input_box all_tex input_bg"/>
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="input_jiantou"></div>  
        </div>
        -->
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">留言</div>
            <div class="clear"></div> 
        </div>
        <div class="textarea_padd">
            <textarea name="message" class="textarea_box input_box all_tex" id="message" placeholder="主公，请在这里书写需要的办事事宜。"></textarea>            
        </div>
    </div>
    <div class="conntbottom_line"></div>
    <div id="yanz" class="submit_buttonhui" onclick="">下一步</div>	
	<?php if ($_SESSION['returnindex']['personal']=='true'){?>
		<div class="return_index" id="return_index"></div>
	<?php }?>
	<?php echo session("returnindex.personal",null);?>


<SCRIPT type="text/javascript">
    $("#yanz").on("click", function () {       
		var phone = $("#phone").val();
		/*
		移动：139   138   137   136   135   134   147   150   151   152   157   158    159   178  182   183   184   187   188  
		联通：130   131   132   155   156   185   186   145   176 
		电信：133   153   177   173   180   181   189
		虚拟运营商：170  171
		整理后：130~139  145,147 15[012356789] 178,176,177,173,170,171 180~189
		*/		
		if (phone.match( /^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/ig)) {			
		} else {
			layer.open({
				content: '请输入正确的手机号',
				time: 2,
				shadeClose: true
			});
			return false;
		}
    });
</SCRIPT>



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
    //电话
    $(".phone").click(function () {
        $("#phone").val('');
        sessionStorage.removeItem('phone');
        $(".phone").css("display", "none");
    });
    $("#phone").focus(function () {
        var phone = $("#phone").val();
        if (phone != '') {
            $(".phone").css("display", "block");
        } else {
            $(".phone").css("display", "none");
        }
    });
    $("#phone").keyup(function () { 		
        if (phone != '') {
            $(".phone").css("display", "block");
        } else {
            $(".phone").css("display", "none");
        }
    });
    $("#phone").blur(function(){
		var phone = $("#phone").val();
        sessionStorage.setItem('phone', phone);	
    });
   
    //地址
    $(".address").click(function () {
        $("#address").val('');
        sessionStorage.removeItem('address');
        $(".address").css("display", "none");
    });
    $("#address").focus(function () {
        var address = $("#address").val();
        if (address != '') {
            $(".address").css("display", "block");
        } else {
            $(".address").css("display", "none");
        }
    });
    $("#address").keyup(function () {        
        if (address != '') {
            $(".address").css("display", "block");
        } else {
            $(".address").css("display", "none");
        }
    });
    $("#address").blur(function(){
	var address = $("#address").val();
        sessionStorage.setItem('address', address);	
    });
    
    //需求 
    $("#message").blur(function(){
	var message = $("#message").val();
        sessionStorage.setItem('message', message);	
    });
    //删除表单值
    $(".delinput").on("click", function () {
        $(".submit_button").attr("class", "").addClass("submit_buttonhui");
    });
    //输入后的按钮颜色    
    $("input,textarea").on("keyup", function () {
        var people = $("#people").val();
        var phone = $("#phone").val();
        var area = $("#area").val();        	
        var address = $("#address").val();
		var message = $("#message").val();
        if (people !== '' && phone !== '' && area !== '' && qujianarea !== '' && address !== '' && message !== '') {
            $(".submit_buttonhui").attr("class", "").addClass("submit_button");
        } else {
            $(".submit_button").attr("class", "").addClass("submit_buttonhui");
        }
    });
    
    //办事区域赋值
    $("#area,#banshi").on("click", function () {	
        location.href = "../Need/BanshiAreaSelect";
    });    
    //取件区域赋值
    $("#qujianarea,#qujian").on("click", function () {
        location.href = "../Need/QujianAreaSelect";
    });

    $(function () {		
        //时间选择器
        $("#choosetime").mobiscroll().date();
        var currYear = (new Date()).getFullYear();
        //初始化日期控件
        var opt = {
            preset: 'datetime', //日期，可选：date\datetime\time\tree_list\image_text\select
            theme: 'default', //皮肤样式，可选：default\android\android-ics light\android-ics\ios\jqm\sense-ui\wp light\wp
            display: 'modal', //显示方式 ，可选：modal\inline\bubble\top\bottom
            mode: 'scroller', //日期选择模式，可选：scroller\clickpick\mixed
            lang: 'zh',
            dateFormat: 'yyyy-mm-dd', // 日期格式
            setText: '确定', //确认按钮名称
            cancelText: '取消', //取消按钮名籍我
            dateOrder: 'yyyymmdd', //面板中日期排列格式
            dayText: '日', monthText: '月', yearText: '年', //面板中年月日文字
            showNow: true,
            nowText: "今",
            //startYear: currYear, //开始年份  
            endYear: currYear + 100 //结束年份  
                    //endYear:2099 //结束年份
        };
        $("#choosetime").mobiscroll(opt);
        //初始信息
        var people = sessionStorage.getItem('people');		
		var phone = "<?php echo $_SESSION['user']['phonenumber'];?>
";
		var phone1 = sessionStorage.getItem('phone'); 		
		if(phone1){
			sessionStorage.setItem('phone',phone1);			
			$("#phone").val(phone1);			
		}else{
			sessionStorage.setItem('phone',phone);
			$("#phone").val(phone);
		}
        var address = sessionStorage.getItem('address');
        if(address == null){
			address = "<?php echo $_SESSION['user']['address'];?>
";	
		}
        	
        var qujianarea = sessionStorage.getItem('qujianarea');
		if(qujianarea == null){
			qujianarea = "<?php echo $_SESSION['user']['areaname'];?>
";
		}
		var area = sessionStorage.getItem('banshiarea');
		if(area == null){
			var area = "<?php echo $_SESSION['area'];?>
";	
		}
        var message = sessionStorage.getItem('message');
        $("#people").val(people);        
        $("#address").val(address);
        $("#message").val(message);
        $("#area").val(area);
        $("#qujianarea").val(qujianarea);
        //默认加载session数据后的按钮颜色
        var people = $("#people").val();
        var phone = $("#phone").val();
        var area = $("#area").val();
        var qujianarea = $("#qujianarea").val();
        var address = $("#address").val();        
		var message = $("#message").val();        
        if (people !== '' && phone !== '' && area !== '' && qujianarea !== '' && address !== '' && message !== '') {
            $(".submit_buttonhui").attr("class", "").addClass("submit_button");
        } else {
            $(".submit_button").attr("class", "").addClass("submit_buttonhui");
        }        
        $(document).on("click", ".submit_button", function () {           
            var people = $.trim(sessionStorage.getItem('people'));
            var phone = $.trim(sessionStorage.getItem('phone'));			
            var address = sessionStorage.getItem('address');
			if(address == null){
				address = "<?php echo $_SESSION['user']['address'];?>
";	
			}
			//alert($("#address").val());
            var message = $.trim(sessionStorage.getItem('message'));            
			var area = sessionStorage.getItem('banshiarea');
			if(area == null){
				area = "<?php echo $_SESSION['areacode'];?>
";
			}
            var qujianarea = sessionStorage.getItem('qujianarea');
			if(qujianarea == null){
				qujianarea = "<?php echo $_SESSION['user']['areaname'];?>
";
			}
            if (people == '') {                
                layer.open({
                    content: '必须填写需求人',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            if (phone == '' || phone.length < 11 || isNaN(phone)) {   
                layer.open({
                    content: '请输入正确的手机号',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            if (area == '') {
                layer.open({
                    content: '必须选择办事区域',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            if (qujianarea == '') {
                layer.open({
                    content: '必须选择取件区域',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
            if (address == '') {
                layer.open({
                    content: '必须填写地址',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }
			if (message == '') {                
                layer.open({
                    content: '必须填写需求信息',
                    time: 2,
                    shadeClose: true
                });
                return false;
            }			
            location.href = "../need/SurePersonal";
        });
		
		
    });
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-08 12:00:43
         compiled from "./LezhengWechat/Home/View\Epsquery\Addinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1635558bf81eb7a3e01-24324597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7a192f592a092b90706aa134b8a167bfeb2e88' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\Addinfo.html',
      1 => 1488523377,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1488354145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635558bf81eb7a3e01-24324597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bf81ebbbacf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf81ebbbacf')) {function content_58bf81ebbbacf($_smarty_tpl) {?><html>
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
09.png"></div><div class="left jibenxx input_title">基本信息</div>
            <div class="clear"></div> 
        </div>       
        <div class="input_padd bottom_line">
            <span class="input_title">预约人：</span>&nbsp;&nbsp;&nbsp; <input type="text" name="people" value="" placeholder="请输入预约人姓名（必填）" id="people" maxlength="11" class="input_box all_tex input_bg"/>
            <div class="people" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>        
        <div class="input_padd bottom_line">
            <span class="input_title">手机号码：</span>&nbsp;<input type="text" name="phone" value="" placeholder="请输入11位手机号（必填）" id="phone" maxlength="11" class="input_box all_tex"/>
            <div class="phone" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>               
        <div class="input_padd bottom_line  input_bg">
            <span class="input_title">所在区域：</span>&nbsp;<input type="text" name="area" value="" placeholder="请选择（必填）" id="area" maxlength="11" class="input_box all_tex"/>           
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="input_jiantou"></div>            
        </div>        
        <div class="input_padd bottom_line">
            <span class="input_title">详细地址：</span>&nbsp;<input type="text" name="address" value="" placeholder="不用填写省市区（必填）" id="address"  class="input_box all_tex input_bg"/>
            <div class="address" style="display: none"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
        </div>
        <div class="input_padd">
            <span class="input_title">预约时间：</span>&nbsp;<input type="text" name="choosetime" value="" placeholder="请选择时间（必填）" id="choosetime"  class="input_box all_tex input_bg"/>
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="input_jiantou"></div>  
        </div>
    </div>
    <div class="fenge"></div>
    <div class="baibg all_padd">
        <div class="input_padd">
            <div class="left"><img src="<?php echo @IMG_URL;?>
09.png"></div><div class="left jibenxx input_title">留言</div>
            <div class="clear"></div> 
        </div>
        <div class="textarea_padd">
            <textarea name="message" class="textarea_box input_box all_tex" id="message" placeholder="选填，留下你的特殊情况内容，我们将与你取得联系，请耐心等待。"></textarea>            
        </div>
    </div>
    <div class="conntbottom_line"></div>
    <div class="submit_buttonhui">下一步</div>
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
        var people = $("#people").val();
        sessionStorage.setItem('people', people);
        if (people != '') {
            $(".people").css("display", "block");
        } else {
            $(".people").css("display", "none");
        }
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
        var phone = $("#phone").val();
        sessionStorage.setItem('phone', phone);
        if (phone != '') {
            $(".phone").css("display", "block");
        } else {
            $(".phone").css("display", "none");
        }
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
        var address = $("#address").val();
        sessionStorage.setItem('address', address);
        if (address != '') {
            $(".address").css("display", "block");
        } else {
            $(".address").css("display", "none");
        }
    });
    
    //需求  
    $("#choosetime").mousedown(function () {
        var choosetime = $("#choosetime").val();
        sessionStorage.setItem('choosetime', choosetime);
    });
    $("#message").keyup(function () {
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
        var choosetime = $("#choosetime").val();
        if (people !== '' && phone !== '' && area !== '' && address !== '' && choosetime !== '') {
            $(".submit_buttonhui").attr("class", "").addClass("submit_button");
        } else {
            $(".submit_button").attr("class", "").addClass("submit_buttonhui");
        }
    });
    //区域赋值
    $("#area").on("click", function () {
        location.href = "../Need/AreaSelect";
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
        var phone = sessionStorage.getItem('phone');
        var address = sessionStorage.getItem('address');
        var choosetime = sessionStorage.getItem('choosetime');
        var area = sessionStorage.getItem('area');
        $("#people").val(people);
        $("#phone").val(phone);
        $("#address").val(address);
        $("#choosetime").val(choosetime);
        $("#area").val(area);
        //默认加载session数据后的按钮颜色
        var people = $("#people").val();
        var phone = $("#phone").val();
        var area = $("#area").val();
        var address = $("#address").val();
        var choosetime = $("#choosetime").val();
        if (people !== '' && phone !== '' && area !== '' && address !== '' && choosetime !== '') {
            $(".submit_buttonhui").attr("class", "").addClass("submit_button");
        } else {
            $(".submit_button").attr("class", "").addClass("submit_buttonhui");
        }        
        $(document).on("click", ".submit_button", function () {           
            var phone = $("#phone").val();
            var choosetime = $("#choosetime").val();
            sessionStorage.setItem('choosetime',choosetime);
            if (phone == '' || phone.length < 11) {
                layer.open({
                    content: '请输入正确的手机号',
                    time: 1,
                    shadeClose: true
                });
                return false;
            }
            location.href = "../epsquery/sureaddinfo";
        });
    });



</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
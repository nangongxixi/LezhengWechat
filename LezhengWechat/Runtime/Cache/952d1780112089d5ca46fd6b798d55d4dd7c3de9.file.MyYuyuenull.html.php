<?php /* Smarty version Smarty-3.1.6, created on 2017-02-16 11:47:05
         compiled from "./LezhengWechat/Home/View\Myinfo\MyYuyuenull.html" */ ?>
<?php /*%%SmartyHeaderCode:2678858a41fd62bb169-24048906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952d1780112089d5ca46fd6b798d55d4dd7c3de9' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\MyYuyuenull.html',
      1 => 1487216822,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1486963340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2678858a41fd62bb169-24048906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a41fd64592c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a41fd64592c')) {function content_58a41fd64592c($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
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
return.png"></a>我的订单
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="orderbg">
        <div class="orderbg_yuan">
            <div class="wodeyuyuenull"></div>
        </div>                        
    </div>
</div>
<SCRIPT type="text/javascript">
    $(function () {
        //选项卡切换
        $("#navtab .title li").click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            var li = $(this).parent().next().children();
            $(li[index]).show().siblings().hide();
            //var lid = $(".active").attr("id");            
        });
        //获取数据
        var areacode = sessionStorage.getItem('areacode');
        var code = "<?php echo $_GET['code'];?>
";
        $.ajax({
            type: "GET",
            url: "../../../../../Epsquery/ShixiangListAction/areacode/" + areacode + '/code/' + code,
            success: function (msg) {
                //alert(msg);
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    $("#shixiangitem").prepend('<div class="shixiangitem shixiang_line"><img src="<?php echo @IMG_URL;?>
zxgg.png" class="shixiangicon"><span class="input_title">' + data.datalist[i].title + '</span></div>');
                });
            }
        });
        //点击具体部门的时候
        $(".orderbg").on("click", function () {
            location.href = "../myinfo/setinfo";
        });
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-01 18:40:54
         compiled from "./LezhengWechat/Home/View\Myinfo\Writepingjia.html" */ ?>
<?php /*%%SmartyHeaderCode:1693658a3fd7b92b715-93042367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2258a096fc48089fd599f13c0defe5f31f8beff9' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\Writepingjia.html',
      1 => 1488364850,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1488354145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1693658a3fd7b92b715-93042367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a3fd7bc0dc3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3fd7bc0dc3')) {function content_58a3fd7bc0dc3($_smarty_tpl) {?><html>
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
        
<script type="text/javascript" src="<?php echo @JS_URL;?>
rating_simple.js"></script>
<link href="<?php echo @CSS_URL;?>
rating_simple.css" rel="stylesheet" type="text/css">

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>发表评价
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div> 
    <div class="fenge"></div>
    <div class="baibg mianzexy_padd">
        <textarea name="content" class="pingjia_area" id="textarea" placeholder="请告诉我们，您愿意或不愿意推荐的原因…"></textarea>
    </div>
    <div class="fenge"></div>
    <div class="pingjia_star baibg mianzexy_padd">
        <div class="pingjia_star_title left">综合评价</div>
        <div class="star_st ">
            <input name="my_input" value="5" id="rating_simple1" type="text" style="display: none" class="">                 
        </div>
    </div>
</div>
<div class="conntbottom_line"></div>
<div class="submit_buttonhui" id="submit">发表评价</div>

<SCRIPT type="text/javascript">

    $(function () {        
        $("#rating_simple1").webwidget_rating_simple({
            rating_star_length: '5',
            rating_initial_value: '5', //默认几星
            rating_function_name: '', //this is function name for click
            directory: '<?php echo @IMG_URL;?>
'
        });
        //改变按钮颜色
        $("#textarea").keyup(function () {
            var textarea = $("#textarea").val();
            var rating_simple1 = $("#rating_simple1").val();
            if (textarea !== '') {
                $(".submit_buttonhui").attr("class", "").addClass("submit_button");
            } else {
                $(".submit_button").attr("class", "").addClass("submit_buttonhui");
            }
        });
        //点击提价按钮
        $(document).on("click", ".submit_button", function () {
            var orderid = "<?php echo $_GET['orderid'];?>
";
            var contents = $.trim($("#textarea").val());           
            var starvalue = $("#rating_simple1").val();

            if (contents.length < 1) {
                layer.open({
                    content: '评价不能为空',
                    time: 1
                });
            } else {                
                $.ajax({
                    type: "POST",
                    url: "../../../myinfo/WritepingjiaAction",
                    data: {
                        "orderid": orderid,
                        "contents": contents,
                        "starvalue": starvalue                       
                    },
                    success: function (msg) {
                        alert(msg);
                        var data = JSON.parse(msg);
                        if (data.result == 1) {
                            layer.open({
                                content: '<div style="text-align:left">评价成功</div>',
                                time: 1,
                                end: function () {
                                    location.href = "../myinfo/orderlist";
                                }
                            });

                        }
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
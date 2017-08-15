<?php /* Smarty version Smarty-3.1.6, created on 2017-03-03 12:41:20
         compiled from "./LezhengWechat/Home/View\Epsquery\Department.html" */ ?>
<?php /*%%SmartyHeaderCode:19058589d5f087daae1-43049904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a326ad9b850ef23f84aefd3c34cd265d8e68b75' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\Department.html',
      1 => 1488512803,
      2 => 'file',
    ),
    '259a322885014fcec22f57547e4e882051ada333' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\default.html',
      1 => 1488354145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19058589d5f087daae1-43049904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589d5f0896923',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d5f0896923')) {function content_589d5f0896923($_smarty_tpl) {?><html>
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
        <!--        
        <div class="department_item"><img src="<?php echo @IMG_URL;?>
newsico2.png" class="department_item_img"><div class="department_item_text">运输局</div></div>
        <div class="department_item"><img src="<?php echo @IMG_URL;?>
newsico2.png" class="department_item_img"><div class="department_item_text">运输局</div></div>
        <div class="department_item"><img src="<?php echo @IMG_URL;?>
newsico2.png" class="department_item_img"><div class="department_item_text">运输局</div></div>
        <div class="department_item department_item_right"><img src="<?php echo @IMG_URL;?>
newsico2.png" class="department_item_img"><div class="department_item_text">运输局</div></div>
        <div class="department_item"><img src="<?php echo @IMG_URL;?>
newsico2.png" class="department_item_img"><div class="department_item_text">运输局</div></div>
        -->
        <div id="departmentinfo"></div>       
        <div class="clear"></div>
    </div> 
    <div class="bottom_line"></div>
</div>

<SCRIPT type="text/javascript">
    $(function () {
        //点击搜索输入框后
        $("#sear").on("click", function () {
            location.href = "../epsquery/search";
        });
        //获取区域数据        
        var areacode = sessionStorage.getItem('areacode');
        $.ajax({
            type: "POST",
            url: "../Epsquery/DepartmentAction/",
            data: {
                "areacode": areacode
            },
            success: function (msg) {
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    $("#departmentinfo").prepend('<div class="department_item" code="' + data.datalist[i].code + '" id="xian' + i + '"><img src="http://192.168.0.183:8080/api/v1/Files?filename=' + data.datalist[i].picurl + '" class="department_item_img"><div class="department_item_text">' + data.datalist[i].title + '</div></div>');
                    var index = $(".department_item").length;
                    if (i != 0 && index % 4 == 0) {
                        //alert($(".department_item").attr("id"));
                        $("#xian" + (index - 3)).addClass("department_item_right");
                    }
                });
            }
        });
        //点击具体部门的时候
        $(document).on("click", ".department_item", function () {
            var code = $(this).attr("code");
            sessionStorage.setItem('bumencode', code);
            location.href = "../Epsquery/ShixiangList";
        });

        //改变当前选中的项目的背景        
        var areaval = sessionStorage.getItem('itemid');
        $("#" + areaval).attr("class", "").addClass("area_selectitemred");
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
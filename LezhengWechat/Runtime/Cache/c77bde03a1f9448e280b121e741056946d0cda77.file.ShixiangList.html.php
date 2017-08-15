<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 09:27:03
         compiled from "./LezhengWechat/Home/View\Epsquery\ShixiangList.html" */ ?>
<?php /*%%SmartyHeaderCode:17031589d878e6fd691-18289215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c77bde03a1f9448e280b121e741056946d0cda77' => 
    array (
      0 => './LezhengWechat/Home/View\\Epsquery\\ShixiangList.html',
      1 => 1490664421,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17031589d878e6fd691-18289215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589d878e92ff2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d878e92ff2')) {function content_589d878e92ff2($_smarty_tpl) {?><html>
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

        //展示列表
        var areacode = "<?php echo $_SESSION['areacode'];?>
";
        var bumencode = sessionStorage.getItem('bumencode');
        $.ajax({
            type: "POST",
            url: "../Epsquery/ShixiangListAction",
            data: {
                "areacode": areacode,
                "bumencode": bumencode
            },
            success: function (msg) {
                //alert(msg);
                var data = JSON.parse(msg);
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
				/*
					 var bumenico;
                        var department = data.datalist[i].department;
                        if (department == '财政局') {
                            bumenico = 'caizj';
                        } else if (department == '房管局') {
                            bumenico = 'fanggj';
                        } else if (department == '地税局') {
                            bumenico = 'disabledj';
                        } else if (department == '工商局') {
                            bumenico = 'gongsj';
                        } else if (department == '公安局') {
                            bumenico = 'gongaj';
                        } else if (department == '规划局') {
                            bumenico = 'guihj';
                        } else if (department == '国税局') {
                            bumenico = 'guosj';
                        } else if (department == '国土局') {
                            bumenico = 'guotj';
                        } else if (department == '建设局') {
                            bumenico = 'jiansj';
                        } else if (department == '建筑类审批') {
                            bumenico = 'jianzlsp';
                        } else if (department == '教育局') {
                            bumenico = 'jiaoyj';
                        } else if (department == '经济类审批') {
                            bumenico = 'jingjlsp';
                        } else if (department == '人社局') {
                            bumenico = 'rensj';
                        } else if (department == '社会类审批') {
                            bumenico = 'shehlsp';
                        } else if (department == '食药监局') {
                            bumenico = 'shiyjj';
                        } else if (department == '统筹局') {
                            bumenico = 'tongcj';
                        } else if (department == '卫生局') {
                            bumenico = 'weisj';
                        } else if (department == '文体旅游局') {
                            bumenico = 'wentlyj';
                        } else if (department == '消防大队') {
                            bumenico = 'xiaofdd';
                        } else if (department == '烟草专卖局') {
                            bumenico = 'yanczmj';
                        } else if (department == '质监局') {
                            bumenico = 'zhijj';
                        } else {
                            bumenico = 'bszn';
                        }
				
				*/	
					var imgsrc = '<?php echo @DEFAULT_URL;?>
api/v1/Files?filename=' + data.datalist[i].picurl;		
                    $("#shixiangitem").prepend('<div onclick="" class="shixiangitem shixiang_line" shixiangcode="' + data.datalist[i].code + '" yewmc="'+ data.datalist[i].title +'"><img src="'+imgsrc+'" class="shixiangicon"><span class="input_title bumentitle">' + data.datalist[i].title + '</span></div>');
                });
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
            }
        });
        
        //点击具体事项的时候
        $(document).on("click", ".shixiangitem", function () {
            var shixiangcode = $(this).attr("shixiangcode");
            var yewmc = $(this).attr("yewmc");
            sessionStorage.setItem('shixiangcode', shixiangcode);
            sessionStorage.setItem('yewmc', yewmc);
            location.href = "../Epsquery/shixianginfo";
        });
        
    });

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
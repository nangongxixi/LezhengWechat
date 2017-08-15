<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 10:12:10
         compiled from "./LezhengWechat/Home/View\Myinfo\myyuyue.html" */ ?>
<?php /*%%SmartyHeaderCode:734158a417cd51dd92-02156412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f36fb77417dbf703cdd48feb0559e1f9c64a7e' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\myyuyue.html',
      1 => 1489662854,
      2 => 'file',
    ),
    '6d255580ba7d323da1c65b1b836d6000ba23cc20' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\feigebg.html',
      1 => 1490320091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '734158a417cd51dd92-02156412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a417cd61fad',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a417cd61fad')) {function content_58a417cd61fad($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="乐政微官网" />
        <meta name="description" content="乐政微官网"/>
        <title>乐政微官网</title>
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
dropload.css" />
		<script type="text/javascript" src="<?php echo @JS_URL;?>
zepto.min.js"></script>
		<script type="text/javascript" src="<?php echo @JS_URL;?>
dropload.min.js"></script>	
		<script type="text/javascript" src="<?php echo @JS_URL;?>
layer.js"></script>
    </head>
    <body class="feigebg"> 
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?>
        

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>我的预约
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <!--
    <div class="fenge"></div>
    <div class="baibg all_padd all_text">        
        <div class="myyuyue_bg">                
            <div class="left myyuyue_ico"><img src="<?php echo @IMG_URL;?>
collection.png"></div>
            <div class="all_text left"><span class="myyuyue_title">代开增值税发票</span><br><span class="myyuyue_date">2018-01-24 12:10:00</span></div>                
            <div class='order_cancel_button myyuyue_text'>删除预约</div> 
            <div class="clear"></div>
        </div>
    </div>
    -->
    
	<div class="content">
		<div id="myyuyue"></div>
	</div>
</div>
<SCRIPT type="text/javascript">
    $(function () {
		// 页数		
        var page = 0;       
        $('.content').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: "POST",
					url: "../myinfo/myyuyueaction",
					data: {
                        "page": page
                    },
                    success: function (msg) {
                        var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
                        var arrLen = data.datalist.length;                        					
                        if(arrLen > 0){
							for(var i=0; i<arrLen; i++){
								result += '<div class="fenge"></div><div class="baibg all_padd all_text"><div class="myyuyue_bg"><div class="left myyuyue_ico"><img src="<?php echo @IMG_URL;?>
yuyueico.png"></div><div class="all_text left myyuyue_titlebox"><span class="myyuyue_title">' + data.datalist[i].servicetypename + '</span><br><span class="myyuyue_date">' + data.datalist[i].operatertime + '</span></div><div onclick="" class="order_cancel_button myyuyue_text" id="' + data.datalist[i].appointmentid + '">删除预约</div><div class="clear"></div></div></div>';
							};
							//删除预约
							$(document).on("click", ".order_cancel_button", function () {
								var appointmentid = $(this).attr("id");
								layer.open({
									content: '您确定要删除吗？',
									btn: ['确定', '取消'],
									shadeClose: false, //默认：true，是否点击遮罩时关闭层
									yes: function () {
										$.ajax({
											type: "POST",
											url: "../myinfo/DelyuyueAction",
											data: {
												"appointmentid": appointmentid
											},
											success: function (msg) {
												var data = JSON.parse(msg);
												if (data.result == '1') {
													layer.open({
														content: '操作成功',
														time: 1,
														shadeClose: true,
														end: function () {
															location.reload();
														}
													});
												}
											}
										});
									}
								});
							});
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面
                            $('#myyuyue').append(result);
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);						
						
                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
						$(".dropload-down").after('<br>');
                        me.resetload();
                    }
                });
            }
        });	
        //点击具体部门的时候
        $(".order_cancel_button").on("click", function () {
            location.href = "../myinfo/MyYuyuenull.";
        });
    });
</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 22:42:25
         compiled from "./LezhengWechat/Home/View\Myinfo\feigechuanshu.html" */ ?>
<?php /*%%SmartyHeaderCode:3116158a2a4c9c26e87-71888224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58878711010a25761f7737794636d6944cbfc815' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\feigechuanshu.html',
      1 => 1489662562,
      2 => 'file',
    ),
    '6d255580ba7d323da1c65b1b836d6000ba23cc20' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\feigebg.html',
      1 => 1490320091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3116158a2a4c9c26e87-71888224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a2a4c9ebb19',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a2a4c9ebb19')) {function content_58a2a4c9ebb19($_smarty_tpl) {?><html>
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
        


	<style>
		.content{       
			margin: 0 auto       
		}
		.content .item{
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align:center;
			-webkit-box-align:center;
			box-align:center;
			-webkit-align-items:center;
			align-items:center;
			padding:3.125%;
			border-bottom: 1px solid #ddd;
			color: #333;
			text-decoration: none;
		}
		.content .item img{
			display: block;
			width: 40px;
			height: 40px;
			border:1px solid #ddd;
		}
		.content .item h3{
			display: block;
			-webkit-box-flex: 1;
			-webkit-flex: 1;
			-ms-flex: 1;
			flex: 1;
			width: 100%;
			max-height: 40px;
			overflow: hidden;
			line-height: 20px;
			margin: 0 10px;
			font-size: 1.2rem;
		}
		.content .item .date{
			display: block;
			height: 20px;
			line-height: 20px;
			color: #999;
		}
		.opacity{
			-webkit-animation: opacity 0.3s linear;
			animation: opacity 0.3s linear;
		}
		@-webkit-keyframes opacity {
			0% {
				opacity:0;
			}
			100% {
				opacity:1;
			}
		}
		@keyframes opacity {
			0% {
				opacity:0;
			}
			100% {
				opacity:1;
			}
		}
	</style>




<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>飞鸽传书
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div> 
    <!--
    <div class='feigecs_item baibg'>        
        <div class='feigecs_title'>工商预约<span class='feigecs_date right'>2016.5.25 10:23</span></div>       
        <div class='feigecs_con  input_title all_text'>发生大幅度撒分倒萨范德萨分范德萨范德萨范德萨已成功！详细信息如下：<br>
            办理时间：<span class='feigcs_sj'>8月15日 上午</span><br>
            办理地址：<span class='feigcs_sj'>武侯区办事大厅3号窗口</span>
        </div>
        <div class='feigcs_reddian'></div>
    </div> 
    -->   	
    		
    <div class="feigebg" style="display:none">
        <div class="feigenull_bg"></div>			                  
    </div>       
</div>
<div class="content">
	<div  id="feigeMSG"></div>
    <div class="lists"></div>
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
                    url: "../myinfo/feigeCSAction",
                    data: {
                        "page": page
                    },
                    success: function (msg) {
                        var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
						var arrLen = data.datalist.length;                        					
                        if(arrLen > 0){
							for(var i=0; i<arrLen; i++){
								result += '<div class="feigecs_item baibg" onclick=""  messageid="' + data.datalist[i].messageid + '"><div class="feigecs_title">' + data.datalist[i].messageheaders + '<div class="feigecs_date right">' + data.datalist[i].time + '</div></div><div class="feigecs_con  input_title all_text">' + data.datalist[i].content + '</div><div onclick="" class="feigcs_reddian" isread="'+data.datalist[i].isread+'" messageid="' + data.datalist[i].messageid + '"></div></div> ';
                            };
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }						
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面
                            $('#feigeMSG').append(result);
							$(".feigcs_reddian[isread='1']").removeClass().addClass("del_feigemsg");
							if( $("#feigeMSG").html()==''){
								$(".feigebg").css("display", "block");
								$(".dropload-down").hide();
							} else {
								$(".feigenull_bg").hide();
							}
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);						
                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }					
                });
            }
        });



        /*
         
         //展示列表
         var consumerid = "<?php echo $_SESSION['user']['uid'];?>
";
         var page = 1;
         $.ajax({
         type: "POST",
         url: "../myinfo/feigeCSAction",
         data: {
         "consumerid": consumerid,
         "page": page
         },
         success: function (msg) {
         var msg = msg.replace(/\\n/gm, "<br>");//把'\n'正则替换成'<br>'
         var data = JSON.parse(msg);
         data.datalist = data.datalist.reverse();
         if (data.datalist.length==0) {
         $(".feigebg").css("display","block");
         }
         $.each(data.datalist, function (i) {
         $("#feigeMSG").prepend('<div class="feigecs_item baibg" onclick="" messageid="' + data.datalist[i].messageid + '"><div class="feigecs_title">' + data.datalist[i].messageheaders + '<div class="feigecs_date right">' + data.datalist[i].time + '</div></div><div class="feigecs_con  input_title all_text">' + data.datalist[i].content + '</div><div onclick="" class="feigcs_reddian"></div></div> ');
         //是否已读（不显示红点）                   
         if (data.datalist[i].isread == 1) {
         $(".feigecs_item[messageid='" + data.datalist[i].messageid + "']").find(".feigcs_reddian").toggleClass("del_feigemsg");
         }
         });
         }
         });
         */
    });
	

	//阅读飞鸽传书
	$(document).on("click", ".feigecs_item", function () {		
		var messageid = $(this).attr("messageid");
		if ($(this).find(".del_feigemsg").length<1){
			$.ajax({
				type: "POST",
				url: "../myinfo/YueduFGCSAction",
				data: {
					"messageid": messageid
				},
				success: function (msg) {
					var data = JSON.parse(msg);
					if ('1' == data.result) {
						layer.open({
							content: '阅读成功',
							time: 2,
							shadeClose: true,
							end: function () {
								location.reload();
							}
						});
					}
					if ('1' == data.result) {
						obj.find(".feigcs_reddian").removeClass("feigcs_reddian").addClass("del_feigemsg");
					}
				}
			});
		}
		event.stopPropagation();
	});
	//删除飞鸽传书
	$(document).on("click", ".del_feigemsg", function () {			
		var messageid = $(this).attr("messageid");							
		$.ajax({
			type: "POST",
			url: "../myinfo/DelFGCSAction",
			data: {
				"messageid": messageid
			},
			success: function (msg) {
				var data = JSON.parse(msg);
				if ('1' == data.result) {
					layer.open({
						content: '操作成功',
						time: 2,
						shadeClose: true,
						end: function () {
							location.reload();
						}
					});
				}
			}				
		});
		e.stopPropagation();			 
	});

</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
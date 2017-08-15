<?php /* Smarty version Smarty-3.1.6, created on 2017-06-01 16:38:03
         compiled from "./LezhengWechat/Home/View\Index\dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:2189358bd3d60ab9248-63402234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1d5436efe28956601c0a011f0733147e127a941' => 
    array (
      0 => './LezhengWechat/Home/View\\Index\\dialog.html',
      1 => 1496306273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2189358bd3d60ab9248-63402234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd3d60abd0c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd3d60abd0c')) {function content_58bd3d60abd0c($_smarty_tpl) {?><html>
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="乐政微官网" />
        <meta name="description" content="乐政微官网"/>
        <title>"乐政微官网"</title>
        <!--webim相关配置-->
        <script type="text/javascript" src="<?php echo @JS_URL;?>
huanxin/webim.config.js"></script>
        <!--sdk相关的js-->
        <script type='text/javascript' src='<?php echo @JS_URL;?>
huanxin/strophe-1.2.8.min.js'></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
huanxin/demo-1.4.5.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
huanxin/websdk-1.4.5.js"></script>
        <!-- Jquery相关的js -->
        <script type="text/javascript" src="<?php echo @JS_URL;?>
huanxin/jquery-1.11.2.min.js"></script>
        <!--页面方法JS-->		
        <script type="text/javascript" src="<?php echo @JS_URL;?>
huanxin/main.js"></script>
		
        <script type="text/javascript">
            $(function () {				
				//默认注册
				register();
				//默认加好友
				addFriends();
				//默认登陆
                login();
				//拉取聊天记录
				getCord();
				//滚动条始终置于底部				
				$("#message,#fasong").click(function(){
					$("#content").scrollTop($("#content").height());
					$('#content').scrollTop( $('#content')[0].scrollHeight);
					//保持滚动条底部
					$(window).resize(function() {
						$("#content").scrollTop($("#content").height());
						$('#content').scrollTop( $('#content')[0].scrollHeight);
					});
				});
				//加好友后刷新页面				
				window.onload=function(){
									if (location.href.indexOf("?xyz=")<0)
									{
										location.href=location.href+"?xyz="+Math.random();
									}
								}
            });
        </script>
		
		<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style.css">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
huanxin/login.css">
        <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
huanxin/file.css">
        <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
huanxin/emoji.css">
        <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
huanxin/friends.css">
        <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
huanxin/chatwindow.css">
        <link href="<?php echo @CSS_URL;?>
huanxin/tabStyle.css" rel="stylesheet" type="text/css">
        <!--聊天窗口的样式-->       
        <link rel="stylesheet" href="<?php echo @CSS_URL;?>
dialog.css" />
    </head>
    <body style="background-color:#f1f1f1" >   
    <!--好友和聊天界面-->
    <input type="hidden" id="hideClass" value="t1">
    <input type="hidden" id="hideFriends" value="kefu_01" fanzhe="<?php echo $_SESSION['user']['phonenumber'];?>
">
	<!--<input type="hidden" id="hideFriends" value="kefu_01" fanzhe="<?php echo $_SESSION['openid'];?>
">-->
    <div style="width: 100%;height: 100%;"id="main">      
        <!--聊天界面 -->
        <div class="chatwindow">
            <!--接收人 -->
            <!--<div class="fromDiv"><p id="from" align="center"></p></div>-->
            <div class="fromDiv" style="display:none">
                <ul class="tabs">
                </ul>
            </div>
            <!--消息记录 -->
            <div id="content" headpic="<?php echo @DEFAULT_URL;?>
api/v1/Files?filename=" headpic1 = "<?php echo $_SESSION['user']['headpath'];?>
">
				 <section class="chat-box">
                        <span class="chat-trip">人工在线小乐为您服务</span>
                        <div class="bubbleDiv"></div>
                    </section>
            </div>            
            <!--输入框 -->
            <div class="inputMessage">
                <textarea id="message"></textarea>
            <!--发送按钮-->
				<div class="sendMessage">
					 <div class="sendMessage2">
						<input class="btn" type="button" id="fasong" value="发送" onclick="sendMessage(),chat()"/>
					 </div>
				</div>
			</div>
        </div>		
    </div>
	<?php if ($_SESSION['returnindex']['dialog']=='true'){?>
		<div class="return_index" id="return_index"></div>
	<?php }?>
	<?php echo session("returnindex.dialog",null);?>

	<?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 11:44:18
         compiled from "./LezhengWechat/Home/View\Myinfo\setinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1264958a520bca9cfa2-33047356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536aae3b42d614b52119e9d617f871bc88e96b6f' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\setinfo.html',
      1 => 1489225348,
      2 => 'file',
    ),
    '6db11e9c2a04749a9aaf4b9c1b5e466f74c156dd' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\defaultRegist.html',
      1 => 1490320107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264958a520bca9cfa2-33047356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a520bcc1fb8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a520bcc1fb8')) {function content_58a520bcc1fb8($_smarty_tpl) {?><html>
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
return.png"></a>个人设置
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div>
    <div class="fenge"></div>        
    <div class="baibg all_padd">
        <div class="setinfo_headbutton" id="headimg">        
            <div class="input_title">帐号管理</div>         
            <img src="
			<?php if ($_SESSION['user']['headpath']==''){?>
			<?php echo @IMG_URL;?>
toux.png
			<?php }else{ ?>
			<?php echo @DEFAULT_URL;?>
api/v1/Files?filename=<?php echo $_SESSION['user']['headpath'];?>

			<?php }?>
			" class="userheadimg setinfo_headimg">                
        </div>
        <div class="bottom_line"></div>
        <div class="setinfo_button">        
            <div class="input_title">用户名<span class="right setinfo_phone"><?php echo $_SESSION['user']['username'];?>
</span> </div>
        </div>
        <div class="bottom_line"></div>
    </div>
    <div class="setinfo_button setinfo_nichen" id="modynicheng">
        <div class="all_padd">
            <div class="input_title">昵称<span class="right setinfo_mingc setinfo_address"><?php echo $_SESSION['user']['name'];?>
</span></div>         
            <img src="<?php echo @IMG_URL;?>
jiantou.png" class="setinfo_jiantou setinfo_jiantou1"> 
        </div> 
    </div>
    <div class="baibg all_padd">
        <div class="bottom_line"></div>
        <div class="setinfo_button">        
            <div class="input_title">手机号码<span class="right setinfo_phone"><?php echo $_SESSION['user']['phonenumber'];?>
</span> </div>
        </div>           
    </div>       
    <div class="fenge"></div>    
    <div class="baibg all_padd">           
        <div class="setinfo_button" id="modysex">        
            <div class="input_title">性别<span class="right setinfo_mingc"><?php if ($_SESSION['user']['gender']==1){?>女<?php }else{ ?>男<?php }?></span></div>         
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="setinfo_jiantou"></div>            
        </div>
        <div class="bottom_line"></div>
        <div class="setinfo_button" id="modyaddress">        
            <div class="input_title">常住地址<span class="right setinfo_mingc setinfo_address"><?php echo $_SESSION['user']['address'];?>
</span></div>         
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="setinfo_jiantou"></div>            
        </div>
        <div class="bottom_line"></div>
        <div class="setinfo_button" id="resetpwd">        
            <div class="input_title">重置密码</div>         
            <div><img src="<?php echo @IMG_URL;?>
jiantou.png" class="setinfo_jiantou"></div>            
        </div>   
    </div>
    <div class="fenge"></div>  
    <div class="baibg all_padd">           
        <div class="setinfo_button" id="logout">        
            <div class="input_title">退出登录</div>
        </div>
    </div>
    <div class="bottom_line"></div>        
</div>
<SCRIPT type="text/javascript">
    $(function () {
        $("#headimg").on("click", function () {
            location.href = "../myinfo/headimg";
        });
        $("#modynicheng").on("click", function () {
            location.href = "../myinfo/modynicheng";
        });
        $("#modyphone").on("click", function () {
            location.href = "../myinfo/modyphone";
        });
        $("#modysex").on("click", function () {
            location.href = "../myinfo/modysex";
        });
        $("#modyaddress").on("click", function () {            
            location.href = "../myinfo/modyaddress";
        });
        $("#resetpwd").on("click", function () {
            location.href = "../login/checkphone";
        });
        $("#logout").on("click", function () {
            sessionStorage.clear();
            layer.open({
                content: '<div style="text-align:left">退出后将影响部分功能使用，是否确认退出</div>',
                btn: ['确认', '取消'],
                shadeClose: true, //默认：true，是否点击遮罩时关闭层            
                yes: function () {
                    location.href = "../login/logout";
                }
            });
        });
        
    });
</SCRIPT>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 22:40:12
         compiled from "./LezhengWechat/Home/View\Myinfo\headimg.html" */ ?>
<?php /*%%SmartyHeaderCode:358858a562776f9161-05581153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1fe90cbd6fb2590d71a8bfe880201f216428638' => 
    array (
      0 => './LezhengWechat/Home/View\\Myinfo\\headimg.html',
      1 => 1489240849,
      2 => 'file',
    ),
    'c1e9bd7c9270edc7beff77d2639ec9202584388a' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\baibgdefault.html',
      1 => 1490320102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358858a562776f9161-05581153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a5627787bd4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5627787bd4')) {function content_58a5627787bd4($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
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
    <body class="baibg"> 
        <?php if (empty($_SESSION['user']['uid'])){?><?php echo header("location:../login/index");?>
<?php }?>
        
<script type="text/javascript" src="<?php echo @JS_URL;?>
rating_simple.js"></script>
<link href="<?php echo @CSS_URL;?>
rating_simple.css" rel="stylesheet" type="text/css">

<style type="text/css">
    .btn{  
        background-color: #fff;
        border: 1px solid #cdcdcd;
        height: 40px;
        left: -77px;
        position: relative;
        width: 150px
    } 
    .file{ position:relative; top:-150px; right:-40px; height:140px; filter:alpha(opacity:0);opacity: 0;width:150px }
    #localImag{margin-top: 25%}
</style>

<div class="contt">
    <div class="navstyle">
        <a href="javascript:history.go(-1);" class="navjiantou"><img src="<?php echo @IMG_URL;?>
return.png"></a>修改头像
        <img src="<?php echo @IMG_URL;?>
headimg.png" class="headimg">
    </div> 
    <div class="fenge"></div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#ffffff">
        <tbody>
            <tr>
                <td height="101" align="center">
                    <div id="localImag"><img id="preview" src="<?php echo @IMG_URL;?>
defauhead.png" width="150" height="140" style="display: block"></div>
                </td>
            </tr>
            <tr>
                <td align="center" style="padding-top:10px;">
                    <form action="" name="form" method="post" enctype="multipart/form-data">
                        <input type="file" name="file" id="doc" onchange="javascript:setImagePreview();" class="file">                                
                        <input type="submit" value="提交" class="btn">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!--
<div class="conntbottom_line"></div>-->

<script type="text/javascript">
    //下面用于图片上传预览功能
    function setImagePreview(avalue) {
        var docObj = document.getElementById("doc");

        var imgObjPreview = document.getElementById("preview");
        if (docObj.files && docObj.files[0])
        {
            //火狐下，直接设img属性
            imgObjPreview.style.display = 'block';
            imgObjPreview.style.width = '150px';
            imgObjPreview.style.height = '140px';
            //imgObjPreview.src = docObj.files[0].getAsDataURL();

            //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
            imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
        } else
        {
            //IE下，使用滤镜
            docObj.select();
            var imgSrc = document.selection.createRange().text;
            var localImagId = document.getElementById("localImag");
            //必须设置初始大小
            localImagId.style.width = "150px";
            localImagId.style.height = "140px";
            //图片异常的捕捉，防止用户修改后缀来伪造图片
            try {
                localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
            } catch (e)
            {
                alert("您上传的图片格式不正确，请重新选择!");
                return false;
            }
            imgObjPreview.style.display = 'none';
            document.selection.empty();
        }
        return true;
    }

</script>

        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
    </body>
</html>
<?php }} ?>
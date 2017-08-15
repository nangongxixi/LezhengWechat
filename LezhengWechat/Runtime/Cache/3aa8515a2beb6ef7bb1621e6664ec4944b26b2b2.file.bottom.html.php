<?php /* Smarty version Smarty-3.1.6, created on 2017-03-08 15:11:51
         compiled from "D:\WWW\LezhengWechat\LezhengWechat\Home\View\Common\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:25248589ad6af8e87f6-55218467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa8515a2beb6ef7bb1621e6664ec4944b26b2b2' => 
    array (
      0 => 'D:\\WWW\\LezhengWechat\\LezhengWechat\\Home\\View\\Common\\bottom.html',
      1 => 1488956575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25248589ad6af8e87f6-55218467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589ad6af9a01a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ad6af9a01a')) {function content_589ad6af9a01a($_smarty_tpl) {?>
<SCRIPT type="text/javascript">
    $(function(){
        //点击右上角的头像图标
        $(".headimg").on("click",function(){
            //alert("请跳转到个人中心");
            location.href = "../myinfo/index";
        });        
    });
</SCRIPT><?php }} ?>
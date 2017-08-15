<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 11:02:20
         compiled from "D:\Apache24\htdocs\LezhengWechat\Home\View\Common\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:315558c103c31d5975-75419172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f340f313b0e740fd9aa593e3c8217f702f8b9fea' => 
    array (
      0 => 'D:\\Apache24\\htdocs\\LezhengWechat\\Home\\View\\Common\\bottom.html',
      1 => 1490670101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315558c103c31d5975-75419172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c103c32129f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c103c32129f')) {function content_58c103c32129f($_smarty_tpl) {?>
<SCRIPT type="text/javascript">
    $(function(){
        //点击右上角的头像图标
        $(".headimg").on("click",function(){
            //alert("请跳转到个人中心");
            location.href = "../myinfo/index";
        });        
    });
	/*
	//返回首页(tuodong)
	mobile_move();
	function mobile_move(){
		 // 获取节点
		var block = document.getElementById("return_index");
		var oW, oH;
		// 绑定touchstart事件
		block.addEventListener("touchstart", function (e) {
			console.log(e);
			var touches = e.touches[0];
			oW = touches.clientX - block.offsetLeft;
			oH = touches.clientY - block.offsetTop;			
			//alert(block.offsetTop);
			//alert(touches.clientY);
			//阻止页面的滑动默认事件
			document.addEventListener("touchmove", defaultEvent, false);
		}, false)

		block.addEventListener("touchmove", function (e) {
			var touches = e.touches[0];
			var oLeft = touches.clientX - oW;
			var oTop = touches.clientY - oH;
			var oBottom = touches.clientY + oH;			
			if (oLeft < 0) {
				oLeft = 0;
			} else if (oTop<0){
				oTop = 0;
			//612为窗口高度
			} else if (oTop>612){
				oTop = 612+"px";
			}else if (oLeft > document.documentElement.clientWidth - block.offsetWidth) {
				oLeft = (document.documentElement.clientWidth - block.offsetWidth);
			}
			block.style.left = oLeft + "px";
			block.style.top = oTop + "px";
		}, false);
		block.addEventListener("touchend", function () {
			document.removeEventListener("touchmove", defaultEvent, false);
		}, false);
		function defaultEvent(e) {
			e.preventDefault();
		}				
	}
	*/
	//点击返回首页 
	$("#return_index").on("click",function(){		
		location.href = "../index/index";
	});
</SCRIPT><?php }} ?>
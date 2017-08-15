<?php
  
	//第一步：用户点击该连接后同意授权，获取code
	$appid='wxe8170091421432d3';
	$redirect_uri = urlencode ( 'http://wx.joygov.com/wechat/OAuth2.php?action='.$_GET['action'] );
	$url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
	header("Location:".$url);
	
?>


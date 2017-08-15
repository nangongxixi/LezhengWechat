<?php
//生成自定义菜单
$appid = "wxe8170091421432d3";
$appsecret = "93bcb03b24e6811f50b93b4c0280c400";
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
//get请求生成accesstoken
$access_token = gettoken($url);
$jsonmenu = '{
    "button": [
        {
            "name": "需求发布", 
            "sub_button": [
                {
                    "type": "view", 
                    "name": "个人事项", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=personal"
                }, 
                {
                    "type": "view", 
                    "name": "企业业务", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=business"
                },
				{
                    "type": "view", 
                    "name": "小程序",                   
					"url": "http://www.baidu.com", 
					"appid": "wx2acd4b0714166633", 
					"pagepath": "pages/index/index"
                }                
            ]
        },
        {
            "name": "办事查询", 
            "sub_button": [
				{
                    "type": "view", 
                    "name": "咨询热线", 
                    "url": "http://wx.joygov.com/index.php/home/index/telphone"
                },
                {
                    "type": "view", 
                    "name": "人工咨询", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=dialog"
                },
				{
                    "type": "view", 
                    "name": "事项查询", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=epsquery"
                },
                {
                    "type": "view", 
                    "name": "大厅预约", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=appointment"
                }                
            ]
        },
        {
            "name": "更多精彩", 
            "sub_button": [
				{
                    "type": "view", 
                    "name": "微官网", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=index"
                },
                {
                    "type": "view", 
                    "name": "我的乐政", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=myinfo"
                },                
                {
                    "type": "view", 
                    "name": "APP下载", 
                    "url": "http://wx.joygov.com/index.php/home/appdown/index"
                }, 
                {
                    "type": "view", 
                    "name": "功能介绍", 
                    "url": "http://wx.joygov.com/index.php/home/workIntroduced/index"
                },
				{
                    "type": "view", 
                    "name": "邦定微信", 
                    "url": "http://wx.joygov.com/wechat/wx.php?action=bindwx"
                }
            ]
        }	
    ]
}';
$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $access_token;
//post请求生成菜单

$result = https_request($url, $jsonmenu);

function https_request($url, $data = null) {
    $ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
	$data = curl_exec($ch);
	curl_close($ch);		
	print_r($data);
	
}

function gettoken($url){	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_HEADER, 0);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt($ch, CURL_SSLVERSION_SSL, 2);  
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
	$data = curl_exec($ch);  
	$response = json_decode($data);  
	return $response->access_token; 
	
}

	
	

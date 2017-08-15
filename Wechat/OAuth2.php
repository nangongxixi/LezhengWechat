<?php
	session_start();	
	ini_set("display_errors","On");		
	//羽哥说：“最好在这里trim一下！”
	$appid = trim("wxe8170091421432d3");  
	$secret = trim("93bcb03b24e6811f50b93b4c0280c400");  
	$code = $_GET["code"];
	//echo '获取code：'.$code.'<br/>';
	//第一步：用户同意授权，获取code（详见wx.php）
	//第二步:拿到code后去取得openid
	$oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
	$oauth2 = getJson($oauth2Url);	
	$openid = $oauth2['openid'];
	//echo '获取openid：'.$openid;
	$_SESSION['openid'] = $openid;	
	//个人事项和企业事项无需登陆
	if($_GET ['action']=='personal'){
		$_SESSION['returnindex']['personal']='true';
		echo "<script>location.href='http://wx.joygov.com/index.php/Home/need/personal';</script>";
	}else if($_GET ['action']=='business'){
		$_SESSION['returnindex']['business']='true';
		echo "<script>location.href='http://wx.joygov.com/index.php/Home/need/business';</script>";
	}else if($_GET ['action']=='dialog'){
		$_SESSION['returnindex']['dialog']='true';
		if(!isset($_SESSION['user']['uid'])){
			wx_login();
		}
		echo "<script>location.href='http://wx.joygov.com/index.php/Home/index/dialog';</script>";		
	}else if($_GET ['action']=='epsquery'){
		$_SESSION['returnindex']['epsquery']='true';
		if(!isset($_SESSION['user']['uid'])){			
			wx_login();
		}
		echo "<script>location.href='http://wx.joygov.com/index.php/Home/epsquery/index';</script>";		
	}else if($_GET ['action']=='appointment'){
		$_SESSION['returnindex']['appointment']='true';
		if(!isset($_SESSION['user']['uid'])){			
			wx_login();
		}
		echo "<script>location.href='http://wx.joygov.com/index.php/Home/appointment/index';</script>";
	}else if($_GET ['action']=='myinfo'){
		$_SESSION['returnindex']['myinfo']='true';
		if(!isset($_SESSION['user']['uid'])){			
			wx_login();
		}
		echo "<script>location.href='http://wx.joygov.com/index.php/Home/myinfo/index';</script>";
	}else if($_GET ['action']=='bindwx'){		
		echo "<script>location.href='http://wx.joygov.com/index.php/Home/login/bindwx';</script>";
	}else{
		wx_login();
	}
	
	function wx_login(){
		//请求登陆接口
		$openid = $_SESSION['openid'];
		$url = 'http://www.joygov.com:8010/api/wx/Consumers/LoginInfo';	
		$data=array("isopen"=>$openid,"phonenumber"=>"","pwd"=>"");	
		$data = json_encode($data);	
		$jsonData = loginin($url,$data);
		//echo '<pre>';
		//print_r($jsonData);	
		//是否是注册用户(是:自动登录/否:引导去注册)
		if(empty($jsonData['uid'])){
			echo "<script>alert('手机号未注册或未绑定，请注册或手动登录！');location.href='http://wx.joygov.com/index.php/Home/login/index';</script>";		
		}else{		
			$_SESSION['user']['uid']=$jsonData['uid'];
			$_SESSION['user']['username'] = $jsonData['username'];
			$_SESSION['user']['consumerstypeid'] = $jsonData['consumerstypeid'];
			$_SESSION['user']['phonenumber'] = $jsonData['phonenumber'];
			$_SESSION['user']['headpath'] = $jsonData['headpath'];
			$_SESSION['user']['gender'] = $jsonData['gender'];
			$_SESSION['user']['birthday'] = $jsonData['birthday'];
			$_SESSION['user']['address'] = $jsonData['address'];
			$_SESSION['user']['name'] = $jsonData['name'];
			$_SESSION['user']['idtype'] = $jsonData['idtype'];
			$_SESSION['user']['idnumber'] = $jsonData['idnumber'];
			$_SESSION['user']['remark'] = $jsonData['remark'];
			$_SESSION['user']['imsi'] = $jsonData['imsi'];
			$_SESSION['user']['area'] = $jsonData['area'];
			$_SESSION['user']['areaname'] = $jsonData['areaname'];
			$_SESSION['user']['openid'] = $jsonData['isopenwx'];
			if (isset($_SESSION['user']['uid'])) {			
				if(!isset($_SESSION['area'])){
					echo "<script>location.href='http://wx.joygov.com/index.php/Home/need/areaselect';</script>";					
				}else{
					echo "<script>location.href='http://wx.joygov.com/index.php/Home/index/index';</script>";				
				}
			}
		}
	}
	
	//GET请求	
	function getJson($url){
		$ch = curl_init();//初始化
		curl_setopt($ch, CURLOPT_URL, $url);//需要获取的URL地址
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); //禁用后cURL将终止从服务端进行验证
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); //检查公用名是否存在，并且是否与提供的主机名匹配
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//返回但不输出
		$output = curl_exec($ch);
		curl_close($ch);
		return json_decode($output, true);
	}
	//登陆
	function loginin($url,$data){
		$header = array(
            'X-AjaxPro-Method:ShowList',
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($data));
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
		$result = curl_exec($ch);		
		curl_close($ch);		
		return json_decode($result, true);
	}
	
?>
<?php

namespace Home\Model;

use Think\Model;

class IndexModel extends Model {
	//保存人工咨询记录（“患者“——〉”医生“）
	/*
	{   
		"sessionid":261,
		"padding":"",  
		"chatmessage":"fdsafsd",
		"type":3,
		"sendnumber":"3", 
		"userid":8,			
		"openid":"868349024020382",
		"chatsender":"zifuchuan",
		"chatreceiver":"test25"
	}	
	*/
    public function DialogAction() {
        $url = "/api/wx/OnlineChat";
		if(!empty(I("post.doctormessage"))){
			//医生到患者
			$data['type'] = 4;
			$data['chatsender'] = I("post.chatreceiver");
			$data['chatreceiver'] = I("post.chatsender");
			$data['chatmessage'] = I("post.doctormessage");
			$data['sendnumber'] = "4";
		}else{
			//患者到医生
			$data['type'] = 3;
			$data['chatsender'] = I("post.chatsender");
			$data['chatreceiver'] = I("post.chatreceiver");
			$data['chatmessage'] = I("post.chatmessage");
			$data['sendnumber'] = "3";
		}		
        $data['sessionid'] = "";
        $data['padding'] = "";			
		
		$data['userid'] = session("user.uid");
		$data['openid'] = session("openid");				
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);		
		//echo $data;
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getData($url, $data);				
        echo $returnData;
    }	
	
	//拉取聊天记录
	public function GetCordAction() {
		//取得消息id的数组
		$url = "api/wx/OnlineChat/all?openid=".session("openid");
		//$url = "api/wx/OnlineChat/all?openid=o5cEawlH2A7igVZWcF08i0mDNiNM";
        $getRequest = new \Component\getRequest();
        $returnData = $getRequest->getData($url);
		//echo $returnData;
		$returnData = json_decode($returnData,true);
		
		//循环获取聊天消息
		$msg = [];
		foreach ($returnData as $k=>$v) {					
			$url = "http://www.joygov.com:8010/api/wx/OnlineChat/Chat?sessionid=".$v."&beginsn=0&endsn=999";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$returnData = curl_exec($ch);
			$returnData = json_decode($returnData,true);
			//show_bug($returnData);
			$msg[$k]['serialnumber']=$returnData['datalist'][0]['serialnumber'];
			$msg[$k]['content']=$returnData['datalist'][0]['content'];
		} 
		curl_close($ch); 	
		echo json_encode($msg, JSON_UNESCAPED_UNICODE);			
    }

}

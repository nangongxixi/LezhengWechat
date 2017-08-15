<?php

namespace Home\Model;

use Think\Model;

class NeedModel extends Model {    
    
    //区域选择
    function AreaSelectAction() {
        $url = "api/wx/Areas/AllListInfo";
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        echo $newsSearList;
    }

    //提交事项 (belongto个人为1，企业为2 )
    function ShixiangAction() {
        $url = "api/wx/Orders/Add";
        $person = I("post.actionname");
        //个人事项
        if ($person == 'surepersonal') {
            $data['belongto'] = 1;
        }        
        //企业事项
        if ($person == 'sureBusiness') {            
            $data['nameoffirm'] = I("post.qiymc");
            $data['legalperson'] = I("post.far");
            $data['belongto'] = 2;
        }
        if(!empty(session("user.uid"))){
           $data['consumerid'] = (int) session("user.uid"); 
        }else{
			$data['consumerid'] = 0;
		}
        //从事项查询提交的时候
        if(!empty(I("post.productcode")) && !empty(I("post.productname"))){
            $data['productcode'] = I("post.productcode");
            $data['productname'] = I("post.productname");            
        }        
        $data['consumername'] = I("post.people");
        $data['phonenumber'] = I("post.phone");
        $data['servicearea'] = I("post.areacode");
        $data['fetcharea'] = I("post.qujianarea");
        $data['address'] = I("post.address");
        $data['consumermsg'] = I("post.message");
        $data = json_encode($data,JSON_UNESCAPED_UNICODE);
		//echo $data;exit;		
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getDataJiang($url, $data);
        echo $returnData;
    }
	
	//推送订单通知
	function Dingdantongzhi(){		
		$appid='wxe8170091421432d3';
		$appsecret='93bcb03b24e6811f50b93b4c0280c400';
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appid}&secret={$appsecret}";
		$getRequest = new \Component\getRequest();
        $Token = $getRequest->getToken($url);
		// 这里需要设定为用户的字段
		// touser_openid 是我们之前记录的微信号的openid, 在测试账户页面中是可以看到的
		// template_id 是我们刚才创建的消息模板, 在测试账户页也可以看到		
		$touser_openid = $_SESSION['openid'];
		if($_GET['yuyue']){
			//预约成功
			$template_id = 'Tv_C_5Az7dPdO0uevH2hpjK06rwnshQzpTHg-VQVV1g';
			$sendUrl = "http://wx.joygov.com/index.php/Home/myinfo/myyuyue?action=yuyue";
			$data = array(     
						'first' =>['value'=>'主公，您的预约已成功受理！！','color'=>'#FF0000'] ,
						'keyword1' => array('value' => '  [点击了解]','color'=>'#173177'),
						'keyword2' => array('value' => '  [点击了解]','color'=>'#173177'),
						'keyword3' => array('value' => '  [点击了解]','color'=>'#173177'),
						'keyword4' => array('value' => '  [点击了解]','color'=>'#173177'),
						'remark' => array('value' => "乐政客服竭诚为您服务，欢迎拨打客服电话【962562】\n".date('Y年m月d日 H:i', time())),                 
					);
		}else if($_GET['cancelorder']){
			//取消订单
			$orderID = $_GET['cancelorder'];
			$tuistb = $_GET['tuistb'];			
			$template_id = 'gdPup9VhLz4oqS7TDm1gISps3vh446WSVV9dI6UkR2Y';
			$sendUrl = "http://wx.joygov.com/index.php/Home/myinfo/orderinfo/orderid/".$orderID;
			$data = array(     
						'first' =>['value'=>'取消订单成功！','color'=>'#FF0000'] ,
						'orderProductPrice' => array('value' => '  [点击了解]','color'=>'#173177'),
						'orderProductName' => array('value' => '  [点击了解]','color'=>'#173177'),
						'orderAddress' => array('value' => '  [点击了解]','color'=>'#173177'),
						'orderName' => array('value' => '  [点击了解]','color'=>'#173177'),						         
						'remark' => array('value' => "乐政客服竭诚为您服务，欢迎拨打客服电话【962562】\n".date('Y年m月d日 H:i', time())),                       
					);
		}else{
			//提交事项
			$template_id = 'XRgLY2Rfpb4b7RslPg_PRcTHY5HO7Ly5AkGN0RhTbfM';
			$sendUrl = "http://wx.joygov.com/index.php/Home/myinfo/orderlist?action=personal";
			$data = array(     
						'first' =>['value'=>'您的订单提交成功,我们会及时处理,请耐心等待,谢谢！','color'=>'#FF0000'] ,
						'orderID' => array('value' => '    [点击了解]','color'=>'#173177'),
						'orderMoneySum' => array('value' => '[点击了解]','color'=>'#173177'),
						'backupFieldName' => array('value' => '乐政客服竭诚为您服务，欢迎拨打客服电话【962562】','color'=>'#173177'),          
						'remark' => array('value' => date('Y年m月d日 H:i', time())),                       
					);
		}		
		$arrayData = array(
			"touser" => $touser_openid,
			"template_id" => $template_id,
			"url" => $sendUrl,
			"topcolor" => "#FF0000",
			"data" => $data
		);
		$sendJsonData = json_encode($arrayData, JSON_UNESCAPED_UNICODE);
		// 生成发送模板消息的api地址,用到了token
		$url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token={$Token}";           
		$postRequest = new \Component\postRequest();
        $returnData = $postRequest->Sendmoban($url, $sendJsonData);
		// 页面中返回api调用结果
		echo $returnData;
	}

}

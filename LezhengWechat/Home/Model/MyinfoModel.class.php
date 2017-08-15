<?php

namespace Home\Model;

use Think\Model;

class MyinfoModel extends Model {

    //获取我的预约列表(uid, page)
    function MyyuyueAction() {        
		$consumerid = session("user.uid");
        $page = I("post.page");       
        $url = "api/wx/AppointmentList/" . $consumerid . '/' . $page;       
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);        
        echo $newsSearList;
    }

    //删除预约列表(appointmentid预约号ID)
    function DelyuyueAction() {
        $appointmentid = I("post.appointmentid");
        $url = "api/wx/Appointment/DeleteMyApps/" . $appointmentid;
        //echo $url.'<br>';exit;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        //show_bug($newsSearList);exit;
        echo $newsSearList;
    }

    //修改个人信息
    function ModyMyinfoAction() {
        $url = "api/wx/UpdateConsumers";
        $data['uid'] = session("user.uid");        
        $data['username'] = session("user.username");
        $data['phonenumber'] = session("user.phonenumber");
        $data['headpath'] = session("user.headpath");		
        //昵称
        $name = I("post.name");
        if (!empty($name)) {
            $data['name'] = $name;
        } else {
            $data['name'] = session("user.name");
        }
        //性别
        $sex = I("post.sex");
        if (trim($sex) !== "") {
            $data['gender'] = $sex;
        } else {
            $data['gender'] = session("user.gender");
        }
        //地址
        $address = I("post.address");
        if (!empty($address)) {
            $data['address'] = $address;
        } else {
            $data['address'] = session("user.address");
        }
		//区域
		$AddressAreaName = I("post.AddressAreaName");
		$addressareacode = I("post.addressareacode");
		if($addressareacode){
			$data['area'] = I("post.addressareacode");
		}else{
			$data['area'] = session("user.area");
		}
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
		//echo $data;		
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getData($url, $data);
        $jsonData = json_decode($returnData, true);
        if ($jsonData['result'] == 1) {
            if (isset($name)) {
                session("user.name", $name);
            }
            if (isset($sex)) {
                session("user.gender", $sex);
            }
            if (isset($address)) {
                session("user.address", $address);
            }
			if (isset($AddressAreaName)) {
                session("user.areaname", $AddressAreaName);
				session("user.area", $addressareacode);
            }
        }
		//echo session("user.area");
        //show_bug($jsonData);
		//exit;
        echo $returnData;
    }
    
    //上传头像
    function Headimg() {
        $getRequest = new \Component\postRequest();
        $url = 'api/wx/Files?filetypekey=W3siZGVzYyI6ICIiLCJtb2R1bGUiOjEwMDMsInJlbGF0ZWlkIjowLCJyZW1hcmsiOiAiIiwic2l6ZSI6ICIiLCAidGltZSI6ICIifV0=';
		
		if (isset($_FILES["file"]["tmp_name"]) && empty(($_FILES["file"]["tmp_name"]))) {
            echo "<script>alert('上传文件不超过500k，请重新选择图片！');</script>";
        }
        $returnval = move_uploaded_file($_FILES["file"]["tmp_name"], "Public/upload/" . $_FILES["file"]["name"]);		
        if ($returnval == 1) {
            $path = "Public/upload/" . $_FILES["file"]["name"];
        }
        $newsSearList = $getRequest->updatepic($url, $path);
        $headpath = $newsSearList[0]; //头像        
        //拿到返回值，重新请求接口写进数据库
        $urll = 'api/wx/UpdateConsumers';
        $dataa['uid'] = session("user.uid");
        $dataa['username'] = session("user.username");
        $dataa['gender'] = session("user.gender");
        $dataa['address'] = session("user.address");        
        $dataa['area'] = session("user.area");
        $dataa['headpath'] = $headpath;
        $dataa['name'] = session("user.name");
        $dataa['phonenumber'] = session("user.phonenumber");
        $dataa = json_encode($dataa);
        $newsSearListt = $getRequest->getData($urll, $dataa); //重新请求新的接口
        $jsondata = json_decode($newsSearListt, true);
        if ($headpath != null) {
            session("user.headpath", $headpath);
            echo "<script>alert('修改成功，点【确定】返回查看');location.href='../myinfo/index';</script>";
        }
    }	
    
    //获取飞鸽传书（）
    function FeigeCSAction() {
        $consumerid = session("user.uid");
        $page = I("post.page");
        $url = "api/wx/Messages/" . $consumerid . '/' . $page;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        echo $newsSearList;
    }

    //阅读飞鸽传书
    function YueduFGCSAction() {
        $messageid = I("post.messageid");
        $url = "api/wx/Messages/Reader/" . $messageid;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        echo $newsSearList;
    }

    //删除飞鸽传书
    public function DelFGCSAction() {
        $messageid = (int) I("post.messageid");
        $url = "api/wx/Messages/Delete/" . $messageid;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        echo $newsSearList;
    }

    //飞鸽传书的未读条数(consumerid用户id)
    public function WeiduAction() {
        $consumerid = session("user.uid");
        $url = "api/wx/Messages/NoreadCount/" . $consumerid;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        echo $newsSearList;
    }

    //我的订单列表(consumerid用户id、page页面、querystatus查询状态1 -->全部订单 2--> 待付款 3--> 待办理 4--> 受理中 5--> 待评价 )
    public function OrderlistAction() {
        $consumerid = session("user.uid");
        //$consumerid = 101;
        $page = (int) I("post.page");
        $querystatus = I("post.querystatus");
        $url = "api/wx/Orders/Consumer/" . $consumerid . '/' . $page . '/' . $querystatus;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getDataJiang($url);
        echo $newsSearList;
    }

    //点订单列表“退款”->确认退款“”
    public function SureTuikuanAction() {
        $data = [
            "consumerid" => session("user.uid"),
            "orderid" => (int) I("post.orderid")
        ];
        $url = "api/wx/Orders/Refund/Confirm";
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getDataJiang($url, $data);
        echo $returnData;
    }

    //提交评价
    public function WritepingjiaAction() {
        $data = [
            "orderid" => (int) I("post.orderid"),
            "contents" => I("post.contents"),
            "commentstime" => date("Y-m-d H:i:s", time()),
            "isanonymity" => 0,
            "consumerid" => session("user.uid"),
            "nickname" => session("user.username"),
            "starvalue" => (int) I("post.starvalue")
        ];
        $url = "api/wx/Orders/Comment";
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getDataJiang($url, $data);
        echo $returnData;
    }

    //取消订单
    public function CancelOrderAction() {
        $data = [
            "consumerid" => session("user.uid"),
            "orderid" => (int) I("post.orderid"),
            "cancelcause" => I("post.applyreason")
        ];
        $url = "api/wx/Orders/Cancel";
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);		
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getDataJiang($url, $data);
        echo $returnData;
    }

    //订单详情
    public function OrderInfoAction() {	
        $url = "api/wx/Orders/".I("post.orderid");
        $getRequest = new \Component\getRequest();
        $returnData = $getRequest->getDataJiang($url);
		$dd = json_decode($returnData,true);
		if(isset($dd['productcode'])){
			$cc = substr ( $dd['productcode'] , 0 ,  8 );		
			$dd['picurl'] = $_SESSION['icoarr'][$cc];		
			echo json_encode($dd, JSON_UNESCAPED_UNICODE);
		}else{
			echo $returnData;
		}
		
        //echo $returnData;
		//show_bug($dd);
		//show_bug(session('icoarr'));
    }
    
    //受理状态（阶段图）
    public function OrderStepAction() {      
        $url = "api/wx/Orders/Step/".I("post.orderid");
        $getRequest = new \Component\getRequest();
        $returnData = $getRequest->getDataJiang($url);
        echo $returnData;
    }
    
    //删除订单
    public function DelOrderAction() {       
        $data = [            
            "orderid" => (int) I("post.orderid")            
        ];
        $url = "api/wx/Orders/Delete";
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);       
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getDataJiang($url, $data);
        echo $returnData;
    }
    
    //申请退款
    public function RequestTuikuanAction() { 
        $data = [
            "consumerid" => (int) session("user.uid"),
            "orderid" => (int) I("post.orderid"),            
            "applyreason" => I("post.applyreason")
        ];
        $url = "api/wx/Orders/Refund";
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);        
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getDataJiang($url, $data);
        echo $returnData;
    }
	
	//评论详情
    public function OrderPingjAction() {         
        $url = "api/wx/Orders/Comment/Detail/".I("post.orderid");
        $getRequest = new \Component\getRequest();
        $returnData = $getRequest->getDataJiang($url);
        echo $returnData;
    }

}

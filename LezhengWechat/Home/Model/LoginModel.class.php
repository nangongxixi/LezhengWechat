<?php

namespace Home\Model;

use Think\Model;

class LoginModel extends Model {

    //获取验证码(1：注册，2：找回密码 / username注册时为必填项)
    function SendVricode() {
        $url = "api/wx/VerificationCode";
        $data['phonenumber'] = I("post.phone");
        $actionname = I("post.actionname");
        //注册时
        if ($actionname == 'regist') {
            $data['codetype'] = 1;
            $data['username'] = I("post.people");
        }
        //重置密码时
        if ($actionname == 'checkphone') {
            $data['codetype'] = 2;
            $data['username'] = '';
        }
        $data = json_encode($data);		
        $postRequest = new \Component\postRequest();
        $newsSearList = $postRequest->getData($url, $data);
        echo $newsSearList;
    }

    //验证验证码
    function CheckVricode() {
        $url = "api/wx/Consumers/ValidateLogin";
        $data['phonenumber'] = I("post.phone");
        $data['verifycodes'] = I("post.vricode");
        $data = json_encode($data);
		//echo $data;
        $postRequest = new \Component\postRequest();
        $newsSearList = $postRequest->getData($url, $data);
        echo $newsSearList;
    }

    //重置密码 （phonenumber  pwd）
    function ResetpwdAction() {
        $url = "api/wx/Consumers/Password";
        $data['phonenumber'] = I("post.phone");
        $data['pwd'] = I("post.pwd");
        $data = json_encode($data);
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getData($url, $data);
		$tt = json_decode($returnData,true);		
        if($tt['result']==1){
			session(null);
		}		
        echo $returnData;
    }

    //注册(并登陆)
    function RegistAction() {
        $url = "api/wx/Consumers";
        $data['username'] = I("post.people");
        $data['phonenumber'] = I("post.phone");
		$data['isopenwx'] = session("openid");
        $data['pwd'] = I("post.pwd");
        $data['name'] = I("post.people");
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);		
        $postRequest = new \Component\postRequest();
        $newsSearList = $postRequest->getData($url, $data);		
		$jsonData = json_decode($newsSearList, true);
		//print_r($jsonData);exit;
        if (isset($jsonData['uid'])) {
            session('user', ['uid' => $jsonData['uid'],
                'username' => $jsonData['username'],
                'consumerstypeid' => $jsonData['consumerstypeid'],
                'phonenumber' => $jsonData['phonenumber'],
                'headpath' => $jsonData['headpath'],
                'gender' => $jsonData['gender'],
                'birthday' => $jsonData['birthday'],
                'address' => $jsonData['address'],
                'name' => $jsonData['name'],
                'idtype' => $jsonData['idtype'],
                'idnumber' => $jsonData['idnumber'],
                'remark' => $jsonData['remark'],
                'imsi' => $jsonData['imsi'],
                'area' => $jsonData['area'],
				'areaname' => $jsonData['areaname'],
				'pwd' => I("post.pwd")				
            ]);
        }
        echo $newsSearList;
    }

    //登录
    function LoginAction() {
        $url = "api/wx/Consumers/LoginInfo";
        $data['phonenumber'] = I("post.phone");
        $data['pwd'] = I("post.pwd");		
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);		
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getData($url, $data);
        $jsonData = json_decode($returnData, true);            
        if (isset($jsonData['uid'])) {
            session('user', ['uid' => $jsonData['uid'],
                'username' => $jsonData['username'],
                'consumerstypeid' => $jsonData['consumerstypeid'],
                'phonenumber' => $jsonData['phonenumber'],
                'headpath' => $jsonData['headpath'],
                'gender' => $jsonData['gender'],
                'birthday' => $jsonData['birthday'],
                'address' => $jsonData['address'],
                'name' => $jsonData['name'],
                'idtype' => $jsonData['idtype'],
                'idnumber' => $jsonData['idnumber'],
                'remark' => $jsonData['remark'],
                'imsi' => $jsonData['imsi'],
                'area' => $jsonData['area'],
				'areaname' => $jsonData['areaname'],
				'pwd' => I("post.pwd")
            ]);
        }
		//show_bug(session("user"));
		//exit;
        echo $returnData;
    }
	
	//邦定微信
	function bindWXAction(){
		$url = "api/wx/Consumers/BandingWX";
        $data['phonenumber'] = I("post.phone");
        $data['pwd'] = I("post.pwd");
		$data['isopen'] = session("openid");
        $data = json_encode($data);
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getData($url, $data);				
        echo $returnData;
	}

}

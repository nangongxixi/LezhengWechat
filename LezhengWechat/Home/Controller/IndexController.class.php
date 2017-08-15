<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    //首页
    public function index() {
        $this->display();
    } 
    
    //自助咨询
    public function Zizhuzx() {
        $this->display();
    }
    
    //人工咨询
    public function Dialog() {
        $this->display();
    }
	
	//保存人工咨询记录（“患者“——〉”医生“）
    public function DialogAction() {		
        $loginObj = new \Home\Model\IndexModel();
        $loginObj->DialogAction();
    }
	
	//拉取聊天记录
	public function GetCordAction() {		
        $loginObj = new \Home\Model\IndexModel();
        $loginObj->GetCordAction();
    }
    
    //咨询热线
    public function Telphone() {
        $this->display();
    }    
   
    //首页数据
    public function ServiceAgreementAction() {
        $loginObj = new \Home\Model\NeedModel();
        $loginObj->ServiceAgreementAction();
    }

}

<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {

    //登录
    public function Index() {
        $this->display();
    }

    //注册
    public function Regist() {
        $this->display();
    }

    //设置密码
    public function Setpwd() {
        $this->display();
    }

    //密码重置
    public function Resetpwd() {
        $this->display();
    }

    //注册协议
    public function Agreement() {
        $this->display();
    }
	
	//邦定微信
    public function BindWX() {
        $this->display();
    }

    //手机验证
    public function Checkphone() {
        $this->display();
    }
	
	//邦定微信ACtion
    public function bindWXAction() {
        $bindWX = new \Home\Model\LoginModel();
        $bindWX->bindWXAction();
    }

    //获取验证码
    public function SendVricode() {
        $Vricode = new \Home\Model\LoginModel();
        $Vricode->SendVricode();
    }

    //获取验证码
    public function CheckVricode() {
        $Vricode = new \Home\Model\LoginModel();
        $Vricode->CheckVricode();
    }

    //重置密码
    public function ResetpwdAction() {
        $Vricode = new \Home\Model\LoginModel();
        $Vricode->ResetpwdAction();
    }

    //注册
    public function RegistAction() {
        $Vricode = new \Home\Model\LoginModel();
        $Vricode->RegistAction();
    }

    //登录
    public function LoginAction() {
        $Vricode = new \Home\Model\LoginModel();
        $Vricode->LoginAction();
    }

    //退出登录    
    function logout() {
        session(null);
        $this->redirect("login/index");
    }

}

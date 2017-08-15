<?php

namespace Home\Controller;

use Think\Controller;

class NeedController extends Controller {

    //页面展示（个人业务）
    public function Personal() {
        $this->display();
    }

    //区域选择页面展示
    public function AreaSelect() {
        $this->display();
    }    

    //表单确认（个人业务）
    public function SurePersonal() {
        $this->display();
    }

    //提交成功（个人业务）
    public function SubmitSuccess() {
        $this->display();
    }

    //页面展示（企业业务）
    public function Business() {
        $this->display();
    }

    //表单确认（企业业务）
    public function SureBusiness() {
        $this->display();
    }

    //区域选择Action
    public function AreaSelectAction() {
        $areaSelect = new \Home\Model\NeedModel();
        $areaSelect->AreaSelectAction();
    }
    
    //取件区域选择Action
    public function QujianAreaSelect() {
        $this->display();
    }
	
	//办事区域选择Action
    public function BanshiAreaSelect() {
        $this->display();
    }
	
	//修改地址区域
    function AddressAreaSelect() {
        $this->display();
    }
    
    //提交事项
    public function ShixiangAction() {
        $submitData = new \Home\Model\NeedModel();
        $submitData->ShixiangAction();
    }
    
    //把js获取到的sessionstorage区域值保存到session里面
    public function BaocunAreaAction() {
        session("area",I("post.area"));
		session("areaid",I("post.areaid"));
        session("areacode",I("post.areacode"));
		session("hotline",I("post.hotline"));
        session("qujianarea",I("post.qujianarea"));
		session("banshiarea",I("post.banshiarea"));
    }
	
	//推送订单通知
	function Dingdantongzhi(){		
		$submitData = new \Home\Model\NeedModel();
        $submitData->Dingdantongzhi();
	}
}

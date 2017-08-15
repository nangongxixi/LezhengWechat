<?php

namespace Home\Controller;

use Think\Controller;

class MyinfoController extends Controller {

    //首页
    public function Index() {
        $this->display();
    }   
    //飞鸽传书
    public function Feigechuanshu() {
        $this->display();
    }  
    //飞鸽传书为空时
    public function Feigeemail() {
        $this->display();
    } 
    //我的订单
    public function Orderlist() {
        $this->display();
    }
    //订单详情
    public function Orderinfo() {
        $this->display();
    }
    //订单详情
    public function Orderinfo1() {
        $this->display();
    }
    //订单详情
    public function Orderinfo2() {
        $this->display();
    }
    //订单详情
    public function Orderxq() {
        $this->display();
    }
    //写评价
    public function Writepingjia() {
        $this->display();
    }
    //评价成功
    public function SuccessPingj() {
        $this->display();
    }
    //申请退款
    public function Tuikuansq() {
        $this->display();
    }
    //确认申请
    public function SureShenq() {
        $this->display();
    }
    //确认退款
    public function SureTuikuan() {
        $this->display();
    }
    //申请成功
    public function SuccessShenq() {
        $this->display();
    }
    //我的预约
    public function MyYuyue() {
        $this->display();
    }    
    //我的预约为空
    public function MyYuyuenull() {
        $this->display();
    } 
    //个人设置
    public function Setinfo() {  
        
        $this->display();
    }
    //修改昵称
    public function ModyNicheng() {         
        $this->display();
    }   
    //修改性别
    public function ModySex() {        
        $this->display();
    }
    //修改地址
    public function ModyAddress() {         
        $this->display();
    }
	//取消订单确定
    public function SureCancelOrder() {         
        $this->display();
    }
	
    //上传头像
    public function Headimg() {
        $HeadimgObj = new \Home\Model\MyinfoModel();
        $jsonData = $HeadimgObj->Headimg();
        $this->display();
    }
    //取消订单
    public function CancelOrder() {
        $this->display();
    }    
    //修改个人信息
    public function ModyMyinfoAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->ModyMyinfoAction();
    }
    //获取我的预约列表
    public function MyyuyueAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->MyyuyueAction();
    }
    //删除我的预约
    public function DelyuyueAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->DelyuyueAction();
    }
    //获取飞鸽传书
    public function FeigeCSAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->FeigeCSAction();
    }
    //阅读飞鸽传书
    public function YueduFGCSAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->YueduFGCSAction();
    }
    //删除飞鸽传书
    public function DelFGCSAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->DelFGCSAction();
    }
    //飞鸽传书的未读条数
    public function WeiduAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->WeiduAction();
    }
    //我的订单列表
    public function OrderlistAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->OrderlistAction();
    }
    //点订单列表“退款”->确认退款“”
    public function SureTuikuanAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->SureTuikuanAction();
    }
    //提交评价
    public function WritepingjiaAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->WritepingjiaAction();
    }
    //取消订单
    public function CancelOrderAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->CancelOrderAction();
    }
    //订单详情
    public function OrderInfoAction() {	
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->OrderInfoAction();
    }
    //受理状态（阶段图）
    public function OrderStepAction() {
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->OrderStepAction();
    }
    //删除订单
    public function DelOrderAction() { 
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->DelOrderAction();
    }
    //申请退款
    public function RequestTuikuanAction() { 
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->RequestTuikuanAction();
    }
	//订单详情
    public function OrderPingjAction() { 
        $returnData = new \Home\Model\MyinfoModel();
        $returnData->OrderPingjAction();
    }
    
}

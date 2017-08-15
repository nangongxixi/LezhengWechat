<?php

namespace Home\Controller;

use Think\Controller;

class AppointmentController extends Controller {

    //预约说明
    public function Index() {
        $this->display();
    }
    
    //部门列表
    public function BumenList() {
        $this->display();
    }
    
    //预约列表
    public function Showlist() {
        $this->display();
    }
    
    //添加预约
    public function Addinfo() {             
        $this->display();
    }
    
    //证件类型选择
    public function ZhengjianSelect() {
        $this->display();
    }
    
    //预约成功
    public function SubmitSuccess() {
        $this->display();
    }
    
    //获取部门以及部门事项列表
    public function GetbushilistAction() {
        $returnData = new \Home\Model\AppointmentModel();
        $returnData->GetbushilistAction();
    }
    
    //获取预约列表
    public function GetShowlistAction() {
        $returnData = new \Home\Model\AppointmentModel();
        $returnData->GetShowlistAction();
    }
    
    //添加预约
    public function AddinfoAction() {        
        $returnData = new \Home\Model\AppointmentModel();
        $returnData->AddinfoAction();
    }
    
}

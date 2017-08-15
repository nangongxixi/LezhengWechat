<?php

namespace Home\Controller;

use Think\Controller;

class EpsqueryController extends Controller {

    //部门展示
    public function Index() {
        $this->display();
    }
    
    //事项列表展示
    public function ShixiangList() {
        $this->display();
    }
    
    //事项搜索的样式
    public function Search() {
        $this->display();
    }
    
    //点击事项列表后的详情
    public function ShixiangInfo() {
        $this->display();
    }
    
    //添加信息
    public function Addinfo() {
        $this->display();
    }
    
    //确认添加信息
    public function SureAddinfo() {
        $this->display();
    } 
    
    //免责申明
    public function Agreement() {
        $this->display();
    }
    
    //提交成功
    public function SubmitSuccess() {
        $this->display();
    }
    
    //更多评论
    public function MorePinglun() {
        $this->display();
    }
    
    //获取部门数据
    public function DepartmentAction() {
        $DataObj = new \Home\Model\EpsqueryModel();
        $DataObj->DepartmentAction();
    }
    
    //获取事项列表
    public function ShixiangListAction() {
        $DataObj = new \Home\Model\EpsqueryModel();
        $DataObj->DepartmentAction();
    }
    
    //获取事项详情
    public function ShixianginfoAction() {
        $DataObj = new \Home\Model\EpsqueryModel();
        $DataObj->ShixianginfoAction();
    }
    
    //获取用户点评详情
    public function YonghuDPAction() {
        $DataObj = new \Home\Model\EpsqueryModel();
        $DataObj->YonghuDPAction();
    }
    
    //获取搜索事项结果
    public function SearitemAction() {
        $DataObj = new \Home\Model\EpsqueryModel();
        $DataObj->SearitemAction();
    }
	
	//把图标存入session
	public function ImgarrAction() {
		$imgarr = I("post.imgarr");		
		$data=str_replace("&quot;","\"",$imgarr);		
		$arr = [];
		$ww = [];
		for($i=0;$i<count($data);$i++){			
			$dd = '{'.$data[$i].'}';			
			$arr[] = json_decode($dd,true);			
		    $ww = array_column($arr,'tubiao', 'code');
			
		}
		session('icoarr',$ww);		
		//show_bug($ww);
	}
    
}

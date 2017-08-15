<?php

namespace Home\Model;

use Think\Model;

class EpsqueryModel extends Model {

    //获取部门数据 + 获取事项列表
    function DepartmentAction() {
        if (!empty(I("post.bumencode"))) {
            $parentcode = I("post.bumencode");			
        } else {
            $parentcode = '01';
        }
        $url = "api/wx/Feature/Agents/" . I("post.areacode") . '/' . $parentcode;
        $getRequest = new \Component\getRequest();
        $DepartmentList = $getRequest->getData($url);
		if (!empty(I("post.bumencode"))) {
            $dd = json_decode($DepartmentList,true);
			$sessionArr = session('icoarr');		
			for($i=0;$i<count($dd['datalist']);$i++){
				$arr = substr($dd['datalist'][$i]['code'],0,8);
				$dd['datalist'][$i]['picurl'] = $sessionArr[$arr];
			}		
			 echo json_encode($dd, JSON_UNESCAPED_UNICODE);
        }else{
			echo $DepartmentList;
		}
		
		
		
		
		
       
    }
    
    //获取事项详情
    function ShixianginfoAction() {        
        $url = "api/wx/Products/" . I("post.shixiangcode");
        $getRequest = new \Component\getRequest();
        $DepartmentList = $getRequest->getData($url);
        echo $DepartmentList;
    } 
    
    //获取用户点评详情
    function YonghuDPAction() {        
        $url = "api/wx/Product/Comments/" . I("post.shixiangcode").'/'.I("post.page");
        $getRequest = new \Component\getRequest();
        $DepartmentList = $getRequest->getData($url);
        echo $DepartmentList;
    }

    //获取搜索事项结果（keyword 是 string / areacode 区域编码 是 String ）
    function SearitemAction() {
        $url = "api/wx/Feature/ByKeyword";
        $data = array(
            "keyword"=>I("post.keyword"),
            "areacode"=>I("post.areacode")
        );
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);       
        $postRequest = new \Component\postRequest();
        $jsonData = $postRequest->getData($url,$data);
		$dd = json_decode($jsonData,true);
		$sessionArr = session('icoarr');		
		for($i=0;$i<count($dd['datalist']);$i++){
			$arr = substr($dd['datalist'][$i]['code'],0,8);
			$dd['datalist'][$i]['picurl'] = $sessionArr[$arr];
		}		
		echo json_encode($dd, JSON_UNESCAPED_UNICODE);
        //echo $jsonData;
    }   

}

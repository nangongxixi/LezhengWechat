<?php

namespace Home\Model;

use Think\Model;

class AppointmentModel extends Model {

    //获取部门列表（parentcode如果是获得部门的列表，则传空值，如果是获得事项的列表，则这里传事项所属部门的Code）
    function GetbushilistAction() {
        $areacode = I("post.areacode");
        $parentcode = I("post.parentcode");
        if (empty($parentcode)) {
            $parentcode = 'null';
        }
        $url = "api/wx/Appointment/Type/" . $areacode . '/' . $parentcode;
        $getRequest = new \Component\getRequest();
        $returnData = $getRequest->getData($url);
        echo $returnData;
    }

    //获取预约列表
    function GetShowlistAction() {
        $areacode = I("post.areacode");
        $matterscode = I("post.matterscode");
        $url = "api/wx/Appointment/AppointmentDate/" . $areacode . '/' . $matterscode;       
        $getRequest = new \Component\getRequest();
        $returnData = $getRequest->getData($url);
        echo $returnData;
    }

    //添加预约
    function AddinfoAction() {
        $url = "api/wx/Appointment";
        $data['uid'] = session("user.uid");
        $data['appoinmentfeature'] = I("post.bumentitle");
        $data['appointmenttime'] = I("post.datatime");
        $data['begintime'] = I("post.begintime");
        $data['endtime'] = I("post.endtime");
        $data['name'] = I("post.people");
        $data['phonenumber'] = session("user.phonenumber");
        $data['certificatetype'] = (int) I("post.certificate");
        $data['certificatenumber'] = I("post.certificatecode");
        $data['areacode'] = session("areacode");
        $data['servicetypecode'] = I("post.shxiiangcode");
        $data['servicetypename'] = I("post.servicetypename");
        $data['timetype'] = 1;
        $data['appointmenttimeid'] = 1;
        $data['number'] = 1;
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
		//echo $data;exit;
        $postRequest = new \Component\postRequest();
        $returnData = $postRequest->getData($url, $data);
        echo $returnData;
    }

}

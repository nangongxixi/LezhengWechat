<?php

namespace Component;

use Think\Model;

class postRequest extends Model {

    private $url_default = "http://www.joygov.com:8010/";
    private $url_jiang = "http://www.joygov.com:8010/";//蒋真容的接口

    public function getData($url, $data = '') { 	
		//echo $this->url_default . $url;
		//echo $data;
        $header = array(
            'X-AjaxPro-Method:ShowList',
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($data));
        $ch = curl_init(); //初始化curl
        curl_setopt($ch, CURLOPT_URL, $this->url_default . $url); //抓取指定网页
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function getDataJiang($url, $data = '') {  
  
         $header = array(
            'X-AjaxPro-Method:ShowList',
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($data));        
        $ch = curl_init(); //初始化curl
        curl_setopt($ch, CURLOPT_URL, $this->url_jiang . $url); //抓取指定网页
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);       
        return $result;
    }
    
    //图片上传
    public function updatepic($url,$path){       
        $data = array(             
            'filepath'=>new \CURLFile(realpath($path))            
        );
        //print_r($data);        
        //echo $this->url_default . $url; 
        //exit;
        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
        curl_setopt($ch, CURLOPT_URL, $this->url_default . $url); 
        curl_setopt($ch, CURLOPT_POST, 1);  
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        $result=curl_exec($ch);        
        $bb = json_decode($result,true);
        curl_close($ch);        
        //print_r($bb);            
        return $bb['datalist'];  
    }
	
	//发送模板
	public function Sendmoban($url,$data){	
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
		$data = curl_exec($ch);
		curl_close($ch);		
		return $data;
	}

}

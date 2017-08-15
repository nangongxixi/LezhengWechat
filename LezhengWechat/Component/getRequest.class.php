<?php

namespace Component;

use Think\Model;

class getRequest extends Model {

    //private $url_default = "http://www.joygov.com:8010/";
	//private $url_default = "http://182.150.59.18:8090/";
    private $url_default = "http://www.joygov.com:8010/";
    private $url_jiang = "http://www.joygov.com:8010/";//蒋真容的接口

    public function getData($url) {
        //echo $this->url_default . $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url_default . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    
    public function getDataJiang($url) {
        //echo $this->url_jiang . $url;exit;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url_jiang . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
	
	public function getToken($url) {        
        $ch = curl_init();  
		curl_setopt($ch, CURLOPT_URL, $url);  
		curl_setopt($ch, CURLOPT_HEADER, 0);  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
		curl_setopt($ch, CURL_SSLVERSION_SSL, 2);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
		$data = curl_exec($ch);  
		$response = json_decode($data);  
		return $response->access_token;  
    }
	
	

}

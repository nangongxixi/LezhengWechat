 <?php
    session_start();
    include_once '../config/Database.php';
    ini_set("display_errors","On"); 
    
    $id=$_SESSION['user']['id'];
    $sql="select * from `order` where id in (select `id` from `users` where `uid`=$id)";   
    $rows=$db->queryone($sql);
    
   class TemplateMsgSender
  {

      function __construct($config=array('token'=>'', 'aeskey'=>'', 'appid'=>'', 'appsecret'=>'', 'debug' => FALSE))
      {
          // 构造函数储存我们下面需要用到的数据
          $token = $config['token'];
          $aeskey = $config['aeskey'];
          $appid = $config['appid'];
          $debug = $config['debug'];

          $this->appid = $config['appid'];
          $this->appsecret = $config['appsecret'];
      }

      public function testTemplateMsg(){
        // 获取到 appid 和 appsecret
        $appid = $this->appid;
        $appsecret = $this->appsecret;
        // 构建获取access_token的url
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appid}&secret={$appsecret}";
        // 构建http请求并执行
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result=curl_exec($ch);
        curl_close($ch);
        // 解析返回的json数据
        $jsoninfo = json_decode($result);
        // 读取json中的access_token字段
        $token = $jsoninfo->access_token;

        // 这里需要设定为用户的字段
        // touser_openid 是我们之前记录的微信号的openid, 在测试账户页面中是可以看到的
        // template_id 是我们刚才创建的消息模板, 在测试账户页也可以看到
        $touser_openid = 'oU7vGv5lLpsjYgMVjuRAcmlic-jo';
        $template_id = 'UVxDn6PxvNtxiCUF_e4s7gxQ5hGiquLofcVrKBpPZSM';
        // 创建发送到服务器的post数据
        $data = array(     
                        'title' => array('value' => '尊敬的：'.$_SESSION['user']['name']),
                        'keyword1' => array('value' => '您在xxx商场下了一个订单'),
                        'keyword2' => array('value' => '订单金额为'.$_SESSION['user']['cost'].'元，请在30分钟内支付。'),
                        'keyword3' => array('value' => 'xxx商场竭诚为您服务，欢迎拨打客服电话【400-200-1234】'),            
                        'keyword4' => array('value' => date('Y年m月d日 H:i', time())),                       
        );

        $arrayData = array(
            "touser" => $touser_openid,
            "template_id" => $template_id,
            "url" => "http://wechat.windward.com.cn/order.php?cost={$_SESSION['user']['cost']}",
            "topcolor" => "#FF0000",
            "data" => $data
        );
        $sendJsonData = json_encode($arrayData);
        // 生成发送模板消息的api地址,用到了token
        $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token={$token}";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $sendJsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($sendJsonData))
        );
        $resulst = curl_exec($ch);
        // 页面中返回api调用结果
        echo $resulst;
    }
  }

  // 这里需要换成自己的参数
  // 创建一个实例,然后调用发送模板消息接口
  $wechat = new TemplateMsgSender(array(
    'token' => 'joygov',
    'aeskey' => '',
    'appid' => 'wxe8170091421432d3',
    'appsecret' => '93bcb03b24e6811f50b93b4c0280c400',
    'debug' => true
    ));
  $wechat->testTemplateMsg();
   header("./order.php"); 
?>
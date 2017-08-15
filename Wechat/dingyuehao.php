
<?php
	$con = mysql_connect("112.74.194.118", "root", "Zmgk123456");
	if (!$con){
	  die("Could not connect: " . mysql_error());
	}		
	mysql_select_db("boos_dev");
	//更新操作
	if($_GET['A']){
		$name = $_GET['A'];	
		mysql_query("UPDATE boos_dingyuehao SET num=num+1 WHERE name = '$name' ");		
		mysql_close($con);
		//header("Location:https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzI5OTExMzMxOQ==&scene=124#wechat_redirect");
		header("Location:http://mp.weixin.qq.com/s/I65KxP0h6C2o_izaGhcmvQ");
	}else if($_GET['B']){
		$code = $_GET['B'];
		mysql_query("UPDATE boos_dingyuehao SET num=num+1 WHERE name = '$code' ");				
		mysql_close($con);		
		header("Location:http://mp.weixin.qq.com/s/355gx56pvevktF8rkmMu7A");
	}else{
		//打印表格
		$sql = "SELECT `name`,`num` from boos_dingyuehao where type=0";
		$result = mysql_query($sql,$con);
		echo "<div style='width:1033px; margin:30 auto'><table width='500' style='float:left; border:1px solid #ccc;line-height:200%' ><tr><td colspan=2 style='line-height:220%; font-size:20px; text-align:center'>【订阅号】扫码统计</td></tr><tr><td align='center' style='background-color:#f1f1f1'>名称</td><td align='center' style='background-color:#f1f1f1'>数量</td></tr>";
		while($row=mysql_fetch_array($result)){		        
           echo "<tr><td align='center' style='border-top:1px solid #ccc; border-left:0px solid #ccc; border-right:0px solid #ccc'>".$row["name"]."</td><td align='center' style='border-top:1px solid #ccc'>".$row["num"]."</td></tr>";
       }
	    echo "</table>";	 
		$sql = "SELECT `name`,`num` from boos_dingyuehao where type=1";
		$result = mysql_query($sql,$con);
		echo "<table width='500' style='float:left; margin-left:30px;border:1px solid #ccc; line-height:200%'><tr><td colspan=2 style='line-height:220%; font-size:20px; text-align:center'>【服务号】扫码统计</td></tr><tr><td align='center' style='background-color:#f1f1f1'>名称</td><td align='center' style='background-color:#f1f1f1'>数量</td></tr>";
		while($row=mysql_fetch_array($result)){		        
           echo "<tr><td align='center' style='border-top:1px solid #ccc'>".$row["name"]."</td><td align='center' style='border-top:1px solid #ccc'>".$row["num"]."</td></tr>";
       }
	    echo "</table></div>";	
	
	}		
?>

	
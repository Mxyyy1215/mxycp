<?php session_start();  //设置缓存
	ini_set('error_reporting', 'E_ALL ^ E_NOTICE');//屏蔽非关键性错误
	header("Content-type: text/html; charset=utf-8"); //设置网页编码
  include("../conn.php");
 
	if(isset($_POST['ok'])){ //判断是否提交数据
		  $username=$_POST['yhm'];
		  $password=md5($_POST['mm']);
		  $rmm=$_POST['rmm'];
 
	 
 	  $sql="INSERT INTO tb_business (`username`,`password`,`time`)  VALUES('$username','$password',now())";//sql选择语句
 
		$result = mysqli_query($link,$sql); 
   if($result==true)//判断登陆是否成功
      {
       echo "<script>alert('registration success');window.location.href='res.php'</script>";
      }else{
       echo "<script>alert('registration failed');window.location.href='res.php'</script>";
		  }
		}
		
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function ck(f){
	if(f.yhm.value==""){
		alert("The username is empty!");
		f.yhm.focus();
		return false;
		}
	if(f.mm.value==""){
		alert("The password is empty!");
		f.mm.focus();
		return false;
		}
	if(f.rmm.value==""){
		alert("Repeat password is empty!");
		f.rmm.focus();
		return false;
		}
		
		if(f.rmm.value!=f.mm.value){
		alert("The two passwords are inconsistent!");
		f.rmm.focus();
		return false;
		}
		
		
		
	}
	
 
	
</script>
</head>

<body class="loginbox">
<div class="login">
  <div class="butbox">

    <form method="post"  action="res.php" onsubmit="return ck(this)">
      <h3 class="saletips">Merchant registration<a href="index.php">Sign in</a></h3>
   
      <dl>
        <dt>Username：</dt>
        <dd>
          <input name="yhm" type="text" id="yhm" size="20"/>
        </dd>
      </dl>
      <dl>
        <dt>Password：</dt>
        <dd>
          <input name="mm" type="password" id="mm" />
        </dd>
      </dl>
      <dl>
        <dt>Repeat password：</dt>
        <dd>
          <input name="rmm" type="password" id="rmm" />
        </dd>
      </dl>
   
      <dl>
        <dt>&nbsp;</dt>
        <dd>
          <input name="ok" type="submit" class="inputa"   value="registered" />
        </dd>
      </dl>
    </form>
  </div>
</div>
</body>
</html>

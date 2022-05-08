 <?php
include("../conn.php");

if(isset($_POST['ok'])){
	$name=$_POST['yhm'];
	$password=md5($_POST['mm']);
	 
 	$rs=mysqli_query($link,"select * from tb_business where username='$name' and password='$password'");
	$row=mysqli_fetch_array($rs);
	if(mysqli_num_rows($rs)>0){
		$_SESSION['busyessname']=$name;
 		header("location:addgood.php");
		}else{
			echo '<script type="text/javascript">alert("Username or password is incorrect!");history.back();</script>';
			}
		}
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log in</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function ck(f){
	if(f.yhm.value==""){
		alert("Username can not be empty!");
		f.username.focus();
		return false;
		}
	if(f.mm.value==""){
		alert("Password can not be blank!");
		f.userpwd.focus();
		return false;
		}
 
	}
	
 
	
</script>
</head>

<body class="loginbox">
<div class="login">
  <div class="butbox">

    <form method="post"  action="index.php" onsubmit="return ck(this)">
      <h3 class="saletips">Seller Login<a href="res.php">Registered</a></h3>
      <br />
      <br />
      <dl>
        <dt>Username:</dt>
        <dd>
          <input name="yhm" type="text" id="yhm" size="20"/>
        </dd>
      </dl>
      <dl>
        <dt>Password:</dt>
        <dd>
          <input name="mm" type="password" id="mm" />
        </dd>
      </dl>
   
      <dl>
        <dt>&nbsp;</dt>
        <dd>
          <input name="ok" type="submit" class="inputa"   value="Log in" />
        </dd>
      </dl>
    </form>
  </div>
</div>
</body>
</html>

<?php session_start();  //Set the cache
	ini_set('error_reporting', 'E_ALL ^ E_NOTICE');//Shield non-critical errors
	header("Content-type: text/html; charset=utf-8"); //Coding web pages
  include("conn.php");
 
	if(isset($_POST['submit'])){ //Determines whether to submit data
		  $username=$_POST['yonghuming'];
		  $password=md5($_POST['mima']);
		  $email=$_POST['email'];
		  $address=$_POST['address'];
		  $telephone=$_POST['telephone']; //Post gets the form data
	 
 	  $sql="INSERT INTO tb_user (`username`,`password`,`email`,`address`,`telephone`)  VALUES('$username','$password','$email','$address','$telephone')";//SQL select statement
 
		$result = mysqli_query($link,$sql); 
   if($result==true)//Determine whether the login was successful
      {
       echo "<script>alert('Registration success');window.location.href='res.php'</script>";
      }else{
       echo "<script>alert('Registration failed');window.location.href='res.php'</script>";
		  }
		}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Art auction management</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
 
</head>

<body>
 <div class="yonghudenlgu">
   <div class="headmain">
   
      <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
  
    <a href='seller/index.php'>Seller Login</a>
   <a href='seller/res.php'>Seller Registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"  /></dt>
     <dd><div class="search">
         <form action="search.php" method="post">
            <input type="text" name="search" placeholder="search">
            <button type="submit">search</button>
              </form>
        </div> </dd>
    </dl>
  </div>
</div>

<div class="navbox">
<div class="nav">
<a  class="cur" href="index.php">Home page</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a><a href="help.php">Help</a>
</div>
</div>
<div class="main">
<div class="layout">
	<div class="right">
    	<div class="connect">
        	<div class="back">
            	<a href="#">Home page</a><span>&gt;</span><a href="#">Interaction center</a><span>&gt;</span><a href="#">Consultation and exchange</a>
            </div>
            <form action="res.php" method="post"   name="jcform" onsubmit="return Jiance()" >
             <div class="message">
           
           	  	<dl>
                	<dt>User name:</dt>
                    <dd> <input name="yonghuming" type="text"  class="puta"/><span>*</span></dd>
                </dl>
           	  	<dl>
                	<dt>Password:</dt>
                    <dd> <input name="mima" type="password"  class="puta"/><span>*</span></dd>
                </dl>
           	  	<dl>
                	<dt>Confirm Password:</dt>
                    <dd> <input name="qmima" type="password"  class="puta"/><span>*</span>
                    	 
                    </dd>
                </dl>
           	   	<dl>
                	<dt>Phone:</dt>
                    <dd> <input name="telephone" type="text"  class="puta"/><span>*</span></dd>
                </dl>
                	<dl>
                	<dt>Email:</dt>
                    <dd> <input name="email" type="text"  class="puta"/><span>*</span></dd>
                </dl>
                	<dl>
                	<dt>Address:</dt>
                    <dd> <input name="address" type="text"  class="puta"/><span>*</span></dd>
                </dl>
           	   
                <div class="tijiao">
                	<input name="submit" type="submit" value="Registered" />
                </div>
               </div>
               </form>
        </div>
    </div>
 	
    </div>
    <div class="clearfloat"></div>
    <div class="footer">
 
        <p>MaXinyu</p>
    </div>
</div>
</body>
</html>



<script language="javascript">
function Jiance() {
    if (document.jcform.yonghuming.value=="") 
    {
        window.alert('Please enter the user name!'); 
        return false;
    }
 
    if (document.jcform.mima.value=="") 
    {
        alert('Please enter the password!'); 
        
        return false;
    }
     
    if (document.jcform.qmima.value=="") 
    {
        alert('Please enter the confirm password!'); 
        
        return false;
    }
     

	 
    return true;
} 
</script>

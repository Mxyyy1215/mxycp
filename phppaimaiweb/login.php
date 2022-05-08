<?php
  include("conn.php");
 
	if(isset($_POST['submit'])){ //Decide whether to submit
		  $username=$_POST['yonghuming'];
		  $password=md5($_POST['mima']);
		  //Get data by POST
	 
 	    $sql="select  * from  tb_user where username='$username' and  password='$password'";//SQL select statement
 
		$result = mysqli_query($link,$sql); 
		 $result=mysqli_num_rows($result); //Statistics how much data is queried
   if($result>0)//Determine whether the login was successful
      {
		  $_SESSION['yonghu']=$username; //A successful login will store the database in cache
       echo "<script>alert('Landed successfully');window.location.href='login.php'</script>";
      }else{
       echo "<script>alert('Login failed');window.location.href='login.php'</script>";
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
            <input type="text" name="search" placeholder="Search">
            <button type="submit">Search</button>
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
            <form action="login.php" method="post"   name="jcform" onsubmit="return Jiance()" >
             <div class="message">
           
           	  	<dl>
                	<dt>User name:</dt>
                    <dd> <input name="yonghuming" type="text"  class="puta"/><span>*</span></dd>
                </dl>
           	  	<dl>
                	<dt>Password:</dt>
                    <dd> <input name="mima" type="password"  class="puta"/><span>*</span></dd>
                </dl>
          
           	   
                <div class="tijiao">
                	<input name="submit" type="submit" value="Log in" />
             
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

<?php
include("../conn.php");
 
	$zt=$_GET['zt'];
   
	$id=$_GET['id'];
	 
	$rs=mysqli_query($link,"update tb_study set zt='$zt'  where eaid='$id'") or die(mysqli_error());//更新数据库
	if(mysqli_affected_rows($link)>0){
		echo '<script type="text/javascript">alert("Changed successfully!")</script>';
	    echo '<script type="text/javascript">location.href="default.php";</script>';
		}else{
		    echo '<script type="text/javascript">alert("Changed failed");history.back();</script>';
		    }
?> 
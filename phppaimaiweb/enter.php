<?php
include("conn.php");
$id=$_GET['id'];
 
 
if(!isset($_SESSION['yonghu'])){
		echo '<script type="text/javascript">alert("You are not logged in yet!");</script>';
	    echo '<script type="text/javascript">location.href="login.php";</script>';
		}
 
				$sqls="update tb_study set zt='3' where eaid='$id'";
				$rss=mysqli_query($link,$sqls);//执行sql语句
				echo '<script type="text/javascript">alert("Confirm the bid is successful");</script>';
	          echo '<script type="text/javascript">location.href="default.php";</script>';
	 
		
		
 
?> 
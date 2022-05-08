<?php
//Modifying Administrator Information
include("../conn.php");
if(!isset($_POST['ok'])){
	echo '<script type="text/javascript">alert("Illegal operation");</script>';
	echo '<script type="text/javascript">location.href="admin.php";</script>';
	}
$mc=$_POST['mc'];
$ms=md5($_POST['ms']);
$xmc=$_POST['xmc'];
$xms=md5($_POST['xms']);
$qrms=md5($_POST['qrms']);
$n=mysqli_query($link,"select name from tb_admin");
$name=mysqli_fetch_array($n);
$p=mysqli_query($link,"select password from tb_admin");
$password=mysqli_fetch_array($p);
if($mc==$name['name']){
if($ms==$password['password']){
if($xms==$qrms){
	$upd="update admin set xmc='$xmc',xms='$xms',qrms='$qrms' where name='$mc'";
	}else{
		echo '<script type="text/javascript">alert("Passwords are not the same");</script>';
		echo '<script type="text/javascript">location.href="admin.php";</script>';
		}
$rs=mysqli_query($link,"update tb_admin set name='$xmc',password='$xms' where name='$mc'") or die(mysqli_error());
if(mysqli_affected_rows($link)>0){	
	echo '<script type="text/javascript">alert("Information updated successfully");</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	}else{
		echo '<script type="text/javascript">alert("Password update failed");</script>';
		echo '<script type="text/javascript">location.href="admin.php";</script>';
		}
	}else{
		echo '<script type="text/javascript">alert("Incorrect password");</script>';
		echo '<script type="text/javascript">location.href="admin.php";</script>';
		}
}else{
	echo '<script type="text/javascript">alert("Account input error");</script>';
	echo '<script type="text/javascript">location.href="admin.php";</script>';
	}
?> 
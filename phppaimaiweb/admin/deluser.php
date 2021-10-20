<?php
include("../conn.php");
if(!isset($_GET['id'])){
	echo '<script type="text/javascript">alert("Illegal operation!")</script>';
	echo '<script type="text/javascript">location.href="user.php";</script>';
	exit;
	}
	$id=$_GET['id'];
	$rs=mysqli_query($link,"delete from tb_user where userid='$id'") or die (mysqli_error());
	if(mysqli_affected_rows($link)>0){
		echo '<script type="text/javascript">alert("Successfully deleted!")</script>';
	    echo '<script type="text/javascript">location.href="user.php";</script>';
		}
?>
 
<?php
include("../conn.php");
if(!isset($_POST['ok'])){
	echo '<script type="text/javascript">alert("Illegal operation!")</script>';
	echo '<script type="text/javascript">location.href="showtype.php";</script>';
	exit;
	}
	$typename=$_POST['mc'];
    $typedes=$_POST['ms'];
	$id=$_POST['id'];
	$rs=mysqli_query($link,"update tb_type set typename='$typename',typedes='$typedes' where typeid='$id'") or die(mysqli_error());//更新数据库
	if(mysqli_affected_rows($link)>0){
		echo '<script type="text/javascript">alert("Changed successfully!")</script>';
	    echo '<script type="text/javascript">location.href="showtype.php";</script>';
		}else{
		    echo '<script type="text/javascript">alert("Fail to edit");history.back();</script>';
		    }
?> 
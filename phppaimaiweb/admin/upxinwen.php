<?php
include("../conn.php");
if(!isset($_POST['submit'])){
	echo '<script type="text/javascript">alert("Illegal operation!")</script>';
	echo '<script type="text/javascript">location.href="gonggao.php";</script>';
	exit;
	}
	$id=$_POST['id'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ggdate=date("Y-m-d");
	$rs=mysqli_query($link,"update tb_gonggao set title='$title',content='$content',ggdate='$ggdate' where id='$id'") or die (mysqli_error());
	if(mysqli_affected_rows($link)>0){
		echo '<script type="text/javascript">alert("Changed successfully!")</script>';
	    echo '<script type="text/javascript">location.href="xinwen.php";</script>';
		}
?>
 
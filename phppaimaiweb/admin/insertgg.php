<?php
include("../conn.php");
if(!isset($_POST['submit'])){
	echo '<script type="text/javascript">alert("Illegal operation!")</script>';
	echo '<script type="text/javascript">location.href="gonggao.php";</script>';
	exit;
	}
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ggdate=date("Y-m-d");
	$rs=mysqli_query($link,"insert into tb_gonggao (title,content,ggdate) values ('$title','$content','$ggdate')") or die (mysqli_error());
	if(mysqli_affected_rows($link)>0){
		echo '<script type="text/javascript">alert("Added successfully!")</script>';
	    echo '<script type="text/javascript">location.href="gonggao.php";</script>';
		}
?>
 
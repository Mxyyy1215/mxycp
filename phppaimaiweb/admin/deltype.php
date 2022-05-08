<?php
include("../conn.php");
if(!isset($_GET['id'])){
	echo'<script type="text/jscript">alert("Illegal operation");</script>';
	echo'<script type="text/jscript">location.href="showtype.php";</script>';
	}
    $id=$_GET['id'];
    $rs=mysqli_query($link,"delete from tb_type where typeid='$id'") or die(mysqli_error());
    if(mysqli_affected_rows($link)>0){
	    echo '<script type="text/javascript">alert("Successfully deleted!");</script>';
   	    echo '<script type="text/javascript">location.href="showtype.php";</script>';
	    }else{
			echo '<script type="text/javascript">alert("Failed to delete!");</script>';
   	        echo '<script type="text/javascript">location.href="showtype.php";</script>';
			}
?> 
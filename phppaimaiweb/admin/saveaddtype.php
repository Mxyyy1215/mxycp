<?php
include("../conn.php");
if(!isset($_POST['ok'])){
	echo'<script type="text/jscript">alert("Illegal operation");</script>';
	echo'<script type="text/jscript">location.href="showtype.php";</script>';
    }
    $typename=$_POST['mc'];
    $typedes=$_POST['ms'];
    $rs=mysqli_query($link,"insert into tb_type(typename,typedes) values('$typename','$typedes')") or die(mysqli_error());
    if(mysqli_affected_rows($link)>0){
	    echo '<script type="text/javascript">alert("Added successfully!");</script>';
   	    echo '<script type="text/javascript">location.href="showtype.php";</script>';
	    }
?> 
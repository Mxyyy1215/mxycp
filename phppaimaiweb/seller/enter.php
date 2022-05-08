<?php
include("../conn.php");
$id=$_GET['id'];
 
 
if(!isset($_SESSION['yonghu'])){
		echo '<script type="text/javascript">alert("You are not logged in yet!");</script>';
	    echo '<script type="text/javascript">location.href="login.php";</script>';
		}
      $sql2="select * from tb_study where eaid='$id'"; //query data
					 $rs2=mysqli_query($link,$sql2);//Execute SQL statement
				 
					 $row=mysqli_fetch_array($rs2);
			if($row['zt']==1){
				echo '<script type="text/javascript">alert("This product has been purchased at a price, please do not confirm");</script>';
	          echo '<script type="text/javascript">location.href="default.php";</script>'; 
				}		 
			if($row['zt']==2){
			$sqls="update tb_study set zt='3' where eaid='$id'";
				$rss=mysqli_query($link,$sqls);//Execute SQL statement
				echo '<script type="text/javascript">alert("Confirm the bid is successful");</script>';
	          echo '<script type="text/javascript">location.href="default.php";</script>';
				}		 
			if($row['zt']==0){
			 echo '<script type="text/javascript">alert("The product has been removed, please do not confirm");</script>';
	          echo '<script type="text/javascript">location.href="default.php";</script>';
				}		 
			if($row['zt']==3){
			 echo '<script type="text/javascript">alert("The product has been traded, please do not double confirm");</script>';
	          echo '<script type="text/javascript">location.href="default.php";</script>';
				}		 
			if($row['zt']==4){
			 echo '<script type="text/javascript">alert("There is no bid for this product, and the transaction cannot be confirmed");</script>';
	          echo '<script type="text/javascript">location.href="default.php";</script>';
				}		 
					 
					 
				
	 
		
		
 
?> 
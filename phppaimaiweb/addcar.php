	<?php
include("conn.php");
$buynum=$_POST['buynum'];
$lowprice=$_POST['lowprice'];
$price=$_POST['price'];
$oneprice=$_POST['oneprice'];
   $type=$_POST['type'];
 
$id=$_POST['id'];
if(!isset($_SESSION['yonghu'])){
		echo '<script type="text/javascript">alert("You are not logged in yet!");</script>';
	    echo '<script type="text/javascript">location.href="login.php";</script>';
		}
if($buynum<$lowprice){
		echo '<script type="text/javascript">alert("Your bid cannot be less than the minimum bid!");</script>';
	    echo '<script type="text/javascript">location.href="news.php?eaid='.$id.'";</script>';
		die;
}	
		if($type==1){
	 
			 $sqls="INSERT INTO tb_sale (`goodid`,`goodprice`,`type`,`user`)  VALUES('$id','$oneprice','$type','$_SESSION[yonghu]')";
			 $rss=mysqli_query($link,$sqls); 
				$sqls="update tb_study set zt='1' where eaid='$id'";
				$rss=mysqli_query($link,$sqls);//Execute SQL statement
				echo '<script type="text/javascript">alert("Successful purchase");</script>';
	          echo '<script type="text/javascript">location.href="mydingdan.php";</script>';
			
	 }
			//buy it now
		if($type==2){
			   echo $sql2="select * from tb_sale where goodid='$id' and user='$_SESSION[yonghu]' and type='2'"; //query data
					 $rs2=mysqli_query($link,$sql2);//Execute SQL statement
					 $num2=mysqli_num_rows($rs2); //Statistics how much data is queried
					 $row=mysqli_fetch_array($rs2);
				 if($num2>0){
					 $titles=$row['goodprice']+$buynum;	
					$sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$titles','$_SESSION[yonghu]',now())";
					$rsq=mysqli_query($link,$sqlq);//Execute SQL statement
					
					$sqls="update tb_sale set goodprice='$titles' where goodid='$id' and type='2' ";
					$rss=mysqli_query($link,$sqls);//Execute SQL statement
				 }else{
				 $titles=$price+$buynum;
					$sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$titles','$_SESSION[yonghu]',now())";
					$rsq=mysqli_query($link,$sqlq);//Execute SQL statement 
					
					 $sqls="INSERT INTO tb_sale (`goodid`,`goodprice`,`type`,`user`)  VALUES('$id','$titles','$type','$_SESSION[yonghu]')";
					$rss=mysqli_query($link,$sqls);//Execute SQL statement
					
						$sqlss="update tb_study set zt='2' where eaid='$id'";
				$rsss=mysqli_query($link,$sqlss);//Execute SQL statement
					 }
						echo '<script type="text/javascript">alert("Successful bidding");</script>';
	          echo '<script type="text/javascript">location.href="mydingdan.php";</script>';
			}
		//bidding
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
?> 
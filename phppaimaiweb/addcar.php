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
				$rss=mysqli_query($link,$sqls);//执行sql语句
				echo '<script type="text/javascript">alert("Successful purchase");</script>';
	          echo '<script type="text/javascript">location.href="mydingdan.php";</script>';
			
	 }
			//这是一口价的代码
		if($type==2){
			   echo $sql2="select * from tb_sale where goodid='$id' and user='$_SESSION[yonghu]' and type='2'"; //查询数据
					 $rs2=mysqli_query($link,$sql2);//执行sql语句
					 $num2=mysqli_num_rows($rs2); //统计查询多少数据
					 $row=mysqli_fetch_array($rs2);
				 if($num2>0){
					 $titles=$row['goodprice']+$buynum;	
					$sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$titles','$_SESSION[yonghu]',now())";
					$rsq=mysqli_query($link,$sqlq);//执行sql语句
					
					$sqls="update tb_sale set goodprice='$titles' where goodid='$id' and type='2' ";
					$rss=mysqli_query($link,$sqls);//执行sql语句
				 }else{
				 $titles=$price+$buynum;
					$sqlq="INSERT INTO tb_saleuser (`goodid`,`price`,`user`,`time`)  VALUES('$id','$titles','$_SESSION[yonghu]',now())";
					$rsq=mysqli_query($link,$sqlq);//执行sql语句 
					
					 $sqls="INSERT INTO tb_sale (`goodid`,`goodprice`,`type`,`user`)  VALUES('$id','$titles','$type','$_SESSION[yonghu]')";
					$rss=mysqli_query($link,$sqls);//执行sql语句
					
						$sqlss="update tb_study set zt='2' where eaid='$id'";
				$rsss=mysqli_query($link,$sqlss);//执行sql语句
					 }
						echo '<script type="text/javascript">alert("Successful bidding");</script>';
	          echo '<script type="text/javascript">location.href="mydingdan.php";</script>';
			}
		//这是拍卖价的代码
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
?> 
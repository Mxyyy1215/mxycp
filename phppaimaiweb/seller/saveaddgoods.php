<?php
include("../conn.php");
if(!isset($_POST['ok'])){
	echo '<script type="text/javascript">alert("Illegal operation!");</script>';
    echo '<script type="text/javascript">location.href="addgood.php"</script>';
	}
	$EAname=$_POST['EAname'];
	$typeid=$_POST['typeid'];
	$jianjie=$_POST['jianjie'];
 
	$brand=$_POST['brand'];
	$price=$_POST['price'];
	
	$oneprice=$_POST['oneprice'];
	$lowprice=$_POST['lowprice'];
	$overtime=$_POST['overtime'];
	$overdate=$_POST['overdate'];
 $overtime=$overdate.' '.$overtime;
 
 
	$introduction=$_POST['introduction'];
	$recommend='1';
	$zt=$_POST['zt'];
 
	$time=date("YmdHis");
 
	//echo $time;
	if(is_uploaded_file($_FILES['photo']['tmp_name'])){
 
		$name=$_FILES['photo']['name'];
		$type=$_FILES['photo']['type'];
		$tmp=$_FILES['photo']['tmp_name'];
		$error=$_FILES['photo']['error'];
		$size=$_FILES['photo']['size'];
		$string = strrev($_FILES['photo']['name']);
  $array = explode('.',$string);
   $ex = strrev($array[0]);
		//echo $name."<hr>".$type."<hr>".$tmp."<hr>".$size."<hr>".$error;
		switch($type){
				case "image/jpg": $p=1; break;
			case "image/jpeg": $p=1; break;
			case "image/png": $p=1; break;
			case "image/gif": $p=1; break;
			case "image/pjpeg": $p=1; break;
			default:$p=0;echo "Picture format error!";
			}
			if($p==1&&$error==0){
				$filename=$time.'.'.$ex;
				move_uploaded_file($tmp,"upimages/".$filename);
				$photo="/upimages/".$filename;
				}else{
					echo '<script type="text/javascript">alert("Image upload failed!")</script>';
                    echo '<script type="text/javascript">location.href="addgood.php"</script>';
					}
		}
		
 
		
		 
          $sql="insert into tb_study (EAname,typeid,jianjie,brand,price,oneprice,lowprice,overtime,overdate,introduction,photo,recommend,user,zt) values('$EAname','$typeid','$jianjie','$brand','$price','$oneprice','$lowprice','$overtime','$overdate','$introduction','$photo','$recommend','$_SESSION[busyessname]','4')";
 
$rs2=mysqli_query($link,$sql);
if($rs2==true){
	echo '<script type="text/javascript">alert("Added successfully!")</script>';
    echo '<script type="text/javascript">location.href="default.php"</script>';
	}else{
		echo '<script type="text/javascript">alert("Add failed!")</script>';
		echo '<script type="text/javascript">location.href="addgood.php"</script>';
		} 
?>
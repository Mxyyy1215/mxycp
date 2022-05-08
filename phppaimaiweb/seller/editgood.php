<?php
include("../conn.php");
if(!isset($_POST['ok'])){
	echo '<script type="text/javascript">alert("Illegal operation!");</script>';
    echo '<script type="text/javascript">location.href="default.php"</script>';
	}
	$eaid=$_POST['eaid'];
	$EAname=$_POST['EAname'];
	$typeid=$_POST['typeid'];
	$jianjie=$_POST['jianjie'];
 
 
	$brand=$_POST['brand'];
 
	$price=$_POST['price'];
		$oneprice=$_POST['oneprice'];
	$lowprice=$_POST['lowprice'];
	$overtime=$_POST['overtime'];
	$recommend=$_POST['recommend'];
	$zt=$_POST['zt'];
 
	$introduction=$_POST['introduction'];
 
 
	$time=date("YmdHis");
	$tp=$_POST['tp'];
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
		case "text/plain": $p=1; break;
			case "application/msword": $p=1; break;
			case "application/vnd.ms-powerpoint": $p=1; break;
			case "application/pdf": $p=1; break;
			case "application/vnd.ms-excel": $p=1; break;
			default:$p=0;echo "Picture format error!";
			}
			if($p==1&&$error==0){
				$filename=$time.'.'.$ex;
				 
				 
				move_uploaded_file($tmp,"upimages/".$filename);
				$photo="/upimages/".$filename;
				}
	}else{
		$photo=$tp;
		}
		  $upd="update tb_study set EAname='$EAname',typeid='$typeid',jianjie='$jianjie',brand='$brand',price='$price',lowprice='$lowprice',lowprice='$lowprice',overtime='$overtime',introduction='$introduction',photo='$photo',recommend='$recommend',zt='$zt' where eaid='$eaid'";
		$updrs=mysqli_query($link,$upd) or die(mysqli_error());
		if(mysqli_affected_rows($link)>0){
			echo '<script type="text/javascript">alert("Successfully modified!");</script>';
            echo '<script type="text/javascript">location.href="default.php"</script>';
			}else{
				echo '<script type="text/javascript">alert("Fail to edit!");history.back();</script>';
				}
?>
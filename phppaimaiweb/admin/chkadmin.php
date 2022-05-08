 <?php
include("../conn.php");

if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$password=md5($_POST['userpass']);
	 
	 
 	$rs=mysqli_query($link,"select * from tb_admin where name='$name' and password='$password'");
	$row=mysqli_fetch_array($rs);
	if(mysqli_num_rows($rs)>0){
		$_SESSION['name']=$name;
		$_SESSION['id']=$row['id'];
		header("location:default.php");
		}else{
			echo '<script type="text/javascript">alert("Username or password is incorrect!");history.back();</script>';
			}
		}
    
?>
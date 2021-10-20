<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Management</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("header.php");
include("left.php");
?>
<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;">Your current position: User Management -> Member Management</p>

<br />
 
<table width="670" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:right;">
<tr>
<td height="50" colspan="2" bgcolor="#666666">
<table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
 
<td width="70" bgcolor="#FFFFFF"><div align="center">user name</div></td>
<td width="117" bgcolor="#FFFFFF"><div align="center">user password</div></td> 
<td width="81" bgcolor="#FFFFFF"><div align="center">Phone</div></td>
<td width="82" bgcolor="#FFFFFF"><div align="center">Address</div></td>
<td width="86" bgcolor="#FFFFFF"><div align="center">Email</div></td>
 
<td width="90" bgcolor="#FFFFFF"><div align="center">Operating</div></td>
</tr>
<?php 
include("../conn.php");

if(!isset($_SESSION['name']))
{
  echo '<script type="text/javascript">alert("please log in first!");</script>';
  echo '<script type="text/javascript">location.href="index.php"</script>';
  exit;  	
}
 
$rs2=mysqli_query($link,"select * from tb_user");
while($row=mysqli_fetch_array($rs2)){
?>
<tr>
 
<td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $row['username'];?></div></td>
<td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $row['password'];?></div></td>
<td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $row['telephone'];?></div></td>
<td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $row['address'];?></div></td> 
<td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $row['email'];?></div></td> 
 
<td height="25" bgcolor="#FFFFFF"><div align="center"><a href="deluser.php?id=<?php echo $row['userid'];?>">Delete</a></div></td>
</tr>
<?php 
}
?>
</table></td>
</tr>
 
</table>
 
 
</div>
<div id="footer">
  <p>MaXinyu</p>
</div>
</body>
</html>
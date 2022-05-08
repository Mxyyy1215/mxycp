<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View category</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("../conn.php");
include("header.php");
include("left.php");
?>
<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;">Your current position: Category Management -> Category Management</p>

<br />
 
<table width="670" border="0" cellpadding="0" cellspacing="0">
<tr>
<td colspan="2"  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
<tr>
 
  <td width="79"  bgcolor="#FFFFFF"><div>classification name</div></td>
  <td width="408"  bgcolor="#FFFFFF"><div>Category description</div></td>
  <td width="99"  bgcolor="#FFFFFF"><div>Operating</div></td>
</tr>
<?php

if(!isset($_SESSION['name'])){
	echo '<script type="text/javascript">alert("Please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	exit;
	}
 
	$rs2=mysqli_query($link,"select * from tb_type  ");
	while($row=mysqli_fetch_array($rs2)){
?>
 <tr>
 
  <td width="79"  bgcolor="#FFFFFF"><div><?php echo $row['typename'];?></div></td>
  <td width="408" align="left"  bgcolor="#FFFFFF"><div><?php echo $row['typedes'];?></div></td>
  <td width="99"  bgcolor="#FFFFFF"><div><a href="changetype.php?id=<?php echo $row['typeid'];?>">Modify</a>&nbsp;<a href="deltype.php?id=<?php echo $row['typeid'] ?>">Delete</a></div></td>
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
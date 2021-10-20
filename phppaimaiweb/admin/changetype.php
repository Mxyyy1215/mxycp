<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View category</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function lbyz(fom){
if(fom.mc.value==''){
alert('Please enter the category name');
fom.mc.select();
return false;
}
if(fom.ms.value==''){
alert('Please enter a category description');
fom.ms.select();
return false;
}
}
</script>
</head>
<body>
<?php
include("header.php");
include("left.php");
include("../conn.php");
if(!isset($_GET['id'])){
	echo '<script type="text/javascript">alert("Illegal operation!")</script>';
	echo '<script type="text/javascript">location.href="showtype.php";</script>';
	exit;
	}
	$id=$_GET['id'];
	$rs=mysqli_query($link,"select * from tb_type where typeid='$id'");	
	$row=mysqli_fetch_array($rs);
?>
<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;">Your current position: category management -> modify category</p>
  <form action="uptype.php" method="post" onsubmit="return lbyz(this)" >
<table width="670" border="0" cellpadding="0" cellspacing="0">
<tr>
<td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
<tr>
  <td width="80"  bgcolor="#FFFFFF"><div>classification name:</div></td>
  <td width="240"  bgcolor="#FFFFFF"><input type="text" name="mc" value="<?php echo $row['typename'];?>" />
  <input type="hidden" value="<?php echo $row['typeid'];?>" name="id"/>
  </td>
 </tr>
 <tr>
  <td width="80"  bgcolor="#FFFFFF"><div>Category description:</div></td>
  <td width="500"  bgcolor="#FFFFFF"><input type="text" name="ms" size="60" value="<?php echo $row['typedes'];?>"/></td>
</tr>
 <tr>
  <td colspan="4"  bgcolor="#FFFFFF"><input type="submit" name="ok" value="Submit changes"  />                <input type="reset"  value="Reset"/><div></div></td>
</tr>         
</table></td>
</tr>
</table>
</form>
</div>
<div id="footer">
  <p>MaXinyu</p>
</div>
</body>
</html>
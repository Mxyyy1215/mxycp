<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View news</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("header.php");
include("left.php");
?>

<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;">Your current position: News Management -> News Management</p>
  <form action="delallgonggao.php" method="post" >
    <span style="text-align:right; padding-right:10px;">
    
    </span>
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
      
              <td width="63" bgcolor="#FFFFFF"><div align="center">Title</div></td>
              <td width="374" bgcolor="#FFFFFF"><div align="center">Content</div></td>
              <td width="66" bgcolor="#FFFFFF"><div align="center">Time</div></td>
              <td width="118" bgcolor="#FFFFFF"><div align="center">Operating</div></td>
            </tr>
<?php
include("../conn.php");

if(!isset($_SESSION['name'])){//判断是否登陆用户
	echo '<script type="text/javascript">alert("please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	exit;
	}
 
	$rs2=mysqli_query($link,"select * from tb_gonggao"); //查询数据库
	while($row=mysqli_fetch_array($rs2)){ //遍历
?>

            <tr>
       
              <td bgcolor="#FFFFFF"style="text-align:center;" width="63"><div style="height:20px; height:20px; overflow:hidden"><?php echo $row['title']; ?></div></td>
              <td bgcolor="#FFFFFF"style="text-align:center;" width="300"><div style="height:20px; height:20px; overflow:hidden"><?php echo $row['content']; ?></div></td>
              <td bgcolor="#FFFFFF"style="text-align:center;" width="66"><?php echo $row['ggdate']; ?></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="chxinwen.php?id=<?php echo $row['id'];?>">Modify</a>&nbsp;&nbsp;<a href="delxinwen.php?id=<?php echo $row['id'];?>">Delete</a></div></td>
            </tr>
 <?php
            }
			?>
          </table></td>
      </tr>
    
    </table>
   
 
  <p style=" text-align:right; margin-right:5px;">  

</p>
  </form></div>
<div id="footer">
  <p>MaXinyu</p>
</div>
</body>

</html>

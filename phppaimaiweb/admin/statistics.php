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
      
              <td width="63" bgcolor="#FFFFFF"><div align="center">Commodity category</div></td>
              <td width="374" bgcolor="#FFFFFF"><div align="center">Number of auctions</div></td>
         
            </tr>
<?php
include("../conn.php");

if(!isset($_SESSION['name'])){//Determine whether to log in
	echo '<script type="text/javascript">alert("please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	exit;
	}
 
	$rs2=mysqli_query($link,"select tb_study.typeid, count(tb_study.typeid),count(tb_study.typeid) as total from tb_study,tb_sale where tb_study.eaid=tb_sale.goodid  GROUP BY tb_study.typeid"); //query the database
	while($row=mysqli_fetch_array($rs2)){ //traverse
 
?>

            <tr>
       
              <td bgcolor="#FFFFFF"style="text-align:center;" width="63"><div style="height:20px; height:20px; overflow:hidden">
			  <?php
  $rs=mysqli_query($link,"select * from tb_type where typeid='$row[typeid]'");
   $row2=mysqli_fetch_array($rs);
	  echo $row2['typename'];
	 
  ?>
			  
			 </div></td>
              <td bgcolor="#FFFFFF"style="text-align:center;" width="300"><div style="height:20px; height:20px; overflow:hidden"><?php echo $row['total']; ?></div></td>
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

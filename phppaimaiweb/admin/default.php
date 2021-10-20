 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View product</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("header.php");
include("left.php");
?>

<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;">Your current position: Commodity information management -> Manage commodity information</p>
  <form action="delallgoods.php" method="post"  style="border:none">
    
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
         
              <td width="68"  bgcolor="#FFFFFF"><div>Product information name</div></td>
      
       
 
              <td width="46"  bgcolor="#FFFFFF"><div>Commodity author</div></td>
          
       
        
              <td width="49"  bgcolor="#FFFFFF"><div>Is it recommended</div></td>
              <td width="49"  bgcolor="#FFFFFF"><div>Status</div></td>
 
              <td width="93"  bgcolor="#FFFFFF"><div>Operating</div></td>
            </tr>
<?php
include("../conn.php");
 
if(!isset($_SESSION['name'])){
	echo '<script type="text/javascript">alert("Please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	exit;
	}
 
	$rs2=mysqli_query($link,"select * from tb_study order by eaid desc ");
	
	while($row=mysqli_fetch_array($rs2)){
?>

            <tr>
           
              <td  bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['EAname'];?></td>
           
 
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['brand'];?></td>
             
       
        
          
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php if($row['recommend']==1){echo "Yes";}else{echo "No";};?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php if($row['zt']==1){ echo "On the shelf";}else{ echo "Off shelf";}?></td>
              <td bgcolor="#FFFFFF" style="text-align:center;">
             <a href="changegood.php?zt=1&id=<?php echo $row['eaid'];?>">On the shelf</a>&nbsp;|&nbsp;<a href="changegood.php?zt=0&id=<?php echo $row['eaid'];?>">Off shelf</a>&nbsp;|&nbsp;<a href="delgood.php?id=<?php echo $row['eaid'];?>">Delete</a>&nbsp;|&nbsp;<a href="changegood2.php?id=<?php echo $row['eaid'];?>">Modify</a></td>
           </td>
            </tr>
            <?php
            }
			?>
            
          </table></td>
      </tr>
  
    </table>
  </form></div>
  <div id="footer">
  <p>MaXinyu</p>
</div>
</body>
</html>

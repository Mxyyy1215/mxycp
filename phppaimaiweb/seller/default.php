 
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
              <td width="46"  bgcolor="#FFFFFF"><div>Product information author</div></td>
           <td width="49"  bgcolor="#FFFFFF"><div>Status</div></td>
           <td width="49"  bgcolor="#FFFFFF"><div>Current highest bid</div></td>
              <td width="93"  bgcolor="#FFFFFF"><div>Operating</div></td>
            </tr>
<?php
include("../conn.php");
 
if(!isset($_SESSION['busyessname'])){
	echo '<script type="text/javascript">alert("Please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	exit;
	}
 
	$rs2=mysqli_query($link,"select * from tb_study where user='$_SESSION[busyessname]' order by eaid desc ");
	
	while($row=mysqli_fetch_array($rs2)){
?>

            <tr>
           
              <td  bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['EAname'];?></td>
           
 
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['brand'];?></td>
             
       
        
          
              
              <td bgcolor="#FFFFFF"style="text-align:center;">
			  
              <?php
			  	if($row['zt']==0){ echo "Goods off shelves";}//商品下架
			  														if($row['zt']==1){ echo "Commodities were bought at a price";}//Commodities were bought at a price
																	if($row['zt']==2){ echo "Bidding in progress";} //Bidding in progress
			  														if($row['zt']==3){ echo "The product is bought by the highest bidder";}//The product is bought by the highest bidder
			  														if($row['zt']==4){ echo "Bidding in progress";}//The product is bought by the highest bidder
			  ?>
               </td>
              <td bgcolor="#FFFFFF"style="text-align:center;">
			  
              <?php
			  	 if($row['zt']==2||$row['zt']==3){ 
				  
				 $rs3=mysqli_query($link,"select * from tb_sale where goodid='$row[eaid]' and type='2' or type='3' order by id desc ");
				  $row3=mysqli_fetch_array($rs3);
				    if(empty($row3['goodprice'])){ echo "No bids yet";}else{ echo $row3['goodprice']."$";}
 				 }elseif($row['zt']==1){
				 
					 $rs3=mysqli_query($link,"select * from tb_sale where goodid='$row[eaid]'  and type='1'  order by id desc ");
 					 $row3=mysqli_fetch_array($rs3);
				    if(empty($row3['goodprice'])){ echo "No bids yet";}else{ echo $row3['goodprice']."$";}
					 } else{
						 echo "No bids yet";
						 }
					
			  ?>
              
              
              </td>
              <td bgcolor="#FFFFFF" style="text-align:center;">
                <a href="javascript:if(confirm('Do you really want to close??'))location='enter.php?id=<?php echo $row['eaid'];?>'" >Confirm auction transaction</a>&nbsp;
             <a href="changegood.php?id=<?php echo $row['eaid'];?>">Modify</a>&nbsp;
             <a href="delgood.php?id=<?php echo $row['eaid'];?>">Delete</a></td>
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

<?php
include("conn.php");
 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Art auction management</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
   
<body>
 <div class="yonghudenlgu">
   <div class="headmain">
   
      <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My Order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
  
    <a href='seller/index.php'>Seller Login</a>
   <a href='seller/res.php'>Seller Registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"  /></dt>
        <dd><div class="search">
         <form action="search.php" method="post">
            <input type="text" name="search" placeholder="search">
            <button type="submit">Search</button>
              </form>
        </div> </dd>
    </dl>
  </div>
</div><div class="navbox">
<div class="nav">
<a  class="cur" href="index.php">Home page</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a><a href="help.php">Help</a>
</div>
</div>
<div class="main">
  <div class="titlehote">
    <h3>My order</h3>
    <p>Record of bidding</p>
  </div>
   <div id="content" class="myorder">
 <div class="ddleft">
 	<ul>
    	<li><a href="mydingdan.php" class="cur">My bid</a></li>
    	<li><a href="myonepric.php">One price</a></li>
    </ul>
 </div>
 <div class="ddright"> 
    <table width="100%" border="0" cellpadding="5" cellspacing="0">
      <tr>
        <td ><table width="100%" cellspacing="1" cellpadding="10" border="0px">
            <tr>
              <th width="121" height="36" bgcolor="#FFFFFF"><div align="center">Name of commodity</div></th>
           
               <th width="87" bgcolor="#FFFFFF"><div align="center">Bid</div></th>
              <th width="141" bgcolor="#FFFFFF"><div align="center">Commodity status</div></th>
             </tr>
            <?php
if(!isset($_SESSION['yonghu'])){
	echo '<script type="text/javascript">alert("please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	exit;
	}
 
	$rs=mysqli_query($link,"select * from tb_study,tb_sale where tb_study.eaid=tb_sale.goodid and tb_sale.user='$_SESSION[yonghu]'");
	$total=mysqli_num_rows($rs);
	$pagesize=6;
	$numofpage=ceil($total/$pagesize);//Get maximum value
	if(isset($_GET['page'])){
		$currentpage=$_GET['page'];
		}else{
			$currentpage=1;
			}
	$start=($currentpage-1)*$pagesize;
	 
	$rs2=mysqli_query($link,"select * from tb_study,tb_saleuser where tb_study.eaid=tb_saleuser.goodid and tb_saleuser.user='$_SESSION[yonghu]' order by tb_saleuser.id desc limit $start,$pagesize");
	while($row=mysqli_fetch_array($rs2)){
?>
            <tr>
              <td  bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['EAname'];?></td>
        
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row['price'];?>$</td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php  
			  														if($row['zt']==0){ echo "Goods off shelves";}//Goods from the shelves
			  														if($row['zt']==1){ echo "Commodities were bought at a price";}//The goods were bought at a single price
																	if($row['zt']==2){ echo "Bidding in progress";} //In the bidding
			  														if($row['zt']==3){ echo "The product is bought by the highest bidder";}//The goods were bought by the highest bidder
			  														 
															 ?></td>
             </tr>
            <?php
	}
	?>
          </table></td>
      </tr>
      
    </table>
   </div>
 
  </div>
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>

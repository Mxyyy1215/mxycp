<?php

include("conn.php");
 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Art auction management</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
</head>

<body>
<div class="yonghudenlgu">
  <div class="headmain">
    <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user：".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My Order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 	?>
    <a href='seller/index.php'>Seller Login</a> <a href='seller/res.php'>Seller Registration</a> </div>
</div>
<div class="header">
  <div class="headmain">
    <dl>
      <dt><img src="images/logo.png"  /></dt>
     <dd><div class="search">
         <form action="search.php" method="post">
            <input type="text" name="search" placeholder="Search">
            <button type="submit">Search</button>
              </form>
        </div> </dd>
    </dl>
  </div>
</div>
<div class="navbox">
<div class="nav">
<a  class="cur" href="index.php">Home page</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a><a href="help.php">Help</a>
</div>
</div>
<div class="main">
  <div class="titlehote">
    <h3>Product information details</h3>
    <p>GOODS DETAIL</p>
  </div>
  <div class="newsbox">
    <?php
		$eaid=$_GET['eaid'];
	  $sql="select * from tb_study where eaid='$eaid' "; //Query data
	$rs=mysqli_query($link,$sql);//Execute SQL statement
	while($row=mysqli_fetch_array($rs)){//Traverse the output
		?>
    <div class="jdbxo">
      <div class="jdrgtitle"> <img src="seller<?php echo $row['photo'];?>" />
        <h3> <?php echo $row['EAname'];?></h3>
        <p>Auction deadline: <strong>  <?php echo $row['overtime'];?></strong> </p>
        <p>Commodity base price:<strong> <?php echo $row['price'];?></strong> $</p>
        <p>Current bid:<strong>
          <?php 
			$sql2="select * from tb_sale where goodid='$eaid' "; //Query data
			$rs2=mysqli_query($link,$sql2);//Execute SQL statement
			$num2=mysqli_num_rows($rs2); //Statistics how much data is queried
			$row2=mysqli_fetch_array($rs2);
			if($num2==0){echo "No bids";}else{echo $row2['goodprice'].'$'; }
		 ?>
          </strong> </p>
        <p>Minimum markup:<strong> <?php echo $row['lowprice'];?></strong>$ </p>
          <p>The highest bidder at the current auction:<strong> <?php echo $row2['user'];?></strong> </p>
        <form id="form1" name="form1" method="post" action="addcar.php">
          <input type="hidden" name="id" value="<?php echo $row['eaid'];?>">
          <input type="hidden" name="lowprice" value="<?php echo $row['lowprice'];?>">
          <input type="hidden" name="oneprice" value="<?php echo $row['oneprice'];?>">
          <input type="hidden" name="price" value="<?php echo $row['price'];?>">
          <input type="hidden" name="type" id="type" value="">
          <p>Bid price:
            <input name="buynum" class="buynum" type="text" width="50" value="<?php echo $row['lowprice'];?>">
            $</p>
           
          <p>One price:<?php echo $row['oneprice'];?> $</p>
          
          <p>Current state:
           <?php 
		   	if($row['zt']==0){ echo "Goods off shelves";}//Goods from the shelves
																if($row['zt']==0){ echo "Goods off shelves";}//Goods from the shelves
			  														if($row['zt']==1){ echo "Commodities were bought at a price";}//The goods were bought at a single price
																	if($row['zt']==2){ echo "Bidding in progress";} //In the bidding
			  														if($row['zt']==3){ echo "The product is bought by the highest bidder";}//The goods were bought by the highest bidder		   
			  														if($row['zt']==4){ echo "No bids";}//The goods were bought by the highest bidder		   
																	?>
            </p>
          <input  id="bidbuy"  style="<?php if($row['zt']=='0' || $row['zt']=='1' ){ echo "background: #f0f0f0; color:#888";} ?> " class="btu"  <?php if($row['zt']=='0' || $row['zt']=='1' ){ echo "disabled";} ?> value="Bid to buy">
          <input  id="onebuy" style="<?php if($row['zt']=='0' || $row['zt']=='1' ){ echo "background: #f0f0f0; color:#888";} ?> " class="btu" <?php if($row['zt']=='0' || $row['zt']=='1' ){ echo "disabled";} ?> value="One price">
        </form>
      </div>
      <div class="jdrgtcon">
        <div class="selected">
          <h3>Product details</h3>
        </div>
        <div class="jctips"> <?php echo $row['jianjie'];?> </div>
        <Br />
        <?php echo $row['introduction'];?> </div>
    </div>
    <?php    
	}	
	?>
    </ul>
  </div>
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>
<script>
 
    var onebuy=document.getElementById("onebuy");
    var bidbuy=document.getElementById("bidbuy");
    onebuy.onclick=function(){
		$("#type").val("1");
      $("#form1").submit()
    }
    bidbuy.onclick=function(){
		$("#type").val("2");
      $("#form1").submit()
    }
 
</script>
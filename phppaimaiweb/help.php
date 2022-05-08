<?php
include("conn.php");
    $sql="select * from tb_study "; //Example Query 10 database contents
	$rs=mysqli_query($link,$sql);
	$nowdate= date('Y-m-d');
	while($row=mysqli_fetch_array($rs)){
		if($row['overtime']<$nowdate){
 			mysqli_query($link,"update tb_study set zt='0' where eaid='$row[eaid]'");
 			}
		}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Art auction management</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type=text/javascript src="js/jquery.flexslider.js"></script>
</head>

<body>
 <div class="yonghudenlgu">
   <div class="headmain">
   
      <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
  
    <a href='seller/index.php'>Seller Login</a>
   <a href='seller/res.php'>Seller Registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"/></dt>
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

 
<div class="indexright">
  <div class="titlehote">
    <h3>Frequently Asked Questions</h3>
  </div>
  
   </div>
     <h3>1. Visitors can browse product thumbnails on the homepage, but please log in if you want to auction.</h3>
     <h3>2. If you want to sell artwork, please register as a merchant and start the auction.</h3>
     <h3>3. After logging in, you can check your bidding records on the order page.</h3>
     <h3>4. The bidding goods are delivered by a third-party logistics company. The "211 Limited Time Delivery" service is not supported for the time being, and the normal delivery time limit is 5-7 days (for remote areas such as Xinjiang, Tibet and other regions, the delivery time limit is 7-15 days).</h3>
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>
<script>
	$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			directionNav: false,  
			 controlNav: true,    
			start: function(slider){
 			}
		  });

  
		  
 		 
    })
 
</script>
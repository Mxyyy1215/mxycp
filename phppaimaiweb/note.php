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
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome users:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My order</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
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
<div class="main ">
<div class="notebg">
<div class="titlehote">
   
        <h3>All news<span>|news</span></h3>
        <p>&nbsp;</p>
    
  </div>
  <div class="xinwenliebiao">
    <ul>
    
      
         <?php
 
	  $sql="select * from tb_gonggao"; //Example Query 10 database contents
	$rs=mysqli_query($link,$sql); //Execute SQL
	while($row=mysqli_fetch_array($rs)){//Traverse the output
		?>
     <li><a href="xinwenlb.php?id=<?php echo $row['id'];?>">
          <?php echo $row['title'];?>  <span> <?php echo $row['ggdate'];?> </span>
        </a></li>
      
            
      
        <?php    
	}	
	?>
      
      
      
      
      
      
      
    </ul>
  </div></div>
  <div class="clearfloat"></div>
   
 
  <div class="clearfloat"></div>
  <div class="footer">
    <p>MaXinyu </p>
  </div>
</div>
</body>
</html>

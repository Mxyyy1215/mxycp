<?php
include("conn.php");
 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GU2</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="yonghudenlgu">
  <div class="headmain">
    <?php
 if(isset($_SESSION['yonghu'])){ echo  "<p>Welcome user:".$_SESSION['yonghu']."Log in,  <a href='mydingdan.php'>My oder</a>  <a href='tuichu.php'>Exit system</a></p>"; }
 
	?>
    <a href='seller/index.php'>Merchants landing</a> <a href='seller/res.php'>Business registration</a> </div>
</div>
<div class="header">
  <div class="headmain">
    <dl>
      <dt><img src="images/logo.png"  /></dt>
    <dd><div class="search">
         <form action="search.php" method="post">
            <input type="text" name="search" placeholder="search">
            <button type="submit">search</button>
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
    <h3>News details</h3>
    <p>HOTEL DETAIL</p>
  </div>
  <div class="xinwenxiangqi">
    <?php
		$id=$_GET['id']; //获取url传递的id参数
	  $sql="select * from tb_gonggao where id='$id' "; //查询数据库内容
	$rs=mysqli_query($link,$sql);//执行sql
	while($row=mysqli_fetch_array($rs)){ //输出数据
		?>
    <div class="xwtop"><?php echo $row['title'];?> </div>
    <div class="xwcontent">
      <div class="jdrgtitle"> <?php echo $row['content'];?> </div>
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

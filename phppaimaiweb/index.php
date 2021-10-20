<?php
include("conn.php");
    $sql="select * from tb_study "; //查询10条数据库内容
	$rs=mysqli_query($link,$sql);
	    $nowdate=  date('Y-m-d h:i:s');
 	while($row=mysqli_fetch_array($rs)){
 		if($row['overtime']<$nowdate){
  			 mysqli_query($link,"update tb_study set zt='0' where eaid='$row[eaid]'");
 			} 
			if($row['overtime']<$nowdate){
  			 mysqli_query($link,"update tb_study set zt='0' where eaid='$row[eaid]'");
 			} 
		}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GU2</title>
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
  
    <a href='seller/index.php'>Merchants landing</a>
   <a href='seller/res.php'>Business registration</a>
    </div>    </div>
<div class="header">
  <div class="headmain">
   
    <dl>
      <dt><img src="images/logo.png"/></dt>
      <dd> 
      <div class="search">
         <form action="search.php" method="post">
            <input type="text" name="search" placeholder="Search">
            <button type="submit">Search</button>
              </form>
        </div>
      
       </dd>
    </dl>
  </div>
</div>
<div class="navbox">
<div class="nav">
<a  class="cur" href="index.php">Home page</a> <a href="list.php">Commodity information</a> <a href="note.php">News</a>  <a href="login.php">User login</a> <a href="res.php">User registration</a><a href="help.php">Help</a>
</div>
</div>
<div class="bannerbox">
<div class="kecheng">
	<div class="kctitle">Product categories</div>
    <div class="kclist">
    <ul>
    	 <?php
 	  $sql="select * from tb_type order by typeid asc limit 0,8  "; //查询8条数据库内容  order by id desc是按id进行降序排列limit 0,1 是只取记录中的第一条.所以这条语句只能得到一条记录如想取前10条则 limit 0,10或limit 10如想取第10至20条则 limit 10,20
	$rs=mysqli_query($link,$sql); //执行语句
	while($row=mysqli_fetch_array($rs)){ //遍历数据输出  $row获取的SQL查询语句的1条记录，数组保存。数组键为查询的字段名。循环外获取该值可以通过保存到另外一个数组中来实现
		?>
      <li>
 <a href="list.php?typeid=<?php echo $row['typeid'];?>"> <?php echo $row['typename'];?></a> 
        </li>
      <?php    
	}	
	?>
    </ul>
   
 

    </div>
    
 </div>
<div class="hotlist">
	 <div class="newskecheng">
    <ul>
      <?php
	
	  $sql="select * from tb_study where recommend=1 order by eaid desc limit 0,3 "; //查询10条数据库内容
	$rs=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($rs)){
		?>
      <li>
      <img src="seller/<?php echo $row['photo'];?>" /> <h3><a href="news.php?eaid=<?php echo $row['eaid'];?>"> <?php echo $row['EAname'];?></a></h3>
        <p><span>   <?php echo $row['jianjie'];?></span></p>
        </li>
      <?php    
	}	
	?>
    </ul>
  </div>
</div>
 
</div>
<div class="main">
<div class="indexright">
  <div class="titlehote">
    <h3>Top Recommended Products</h3>
  </div>
  <div class="hotkecheng">
    <ul>
      <?php
       $sql="select * from tb_study  order by eaid desc limit 0,6 "; //查询10条数据库内容
	$rs=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($rs)){
		?>
      <li>
      <img src="seller/<?php echo $row['photo'];?>" /> <h3><a href="news.php?eaid=<?php echo $row['eaid'];?>"> <?php echo $row['EAname'];?></a></h3>
        <p><span><?php echo $row['jianjie'];?></span></p>
        </li>
      <?php    
	}	
	?>
    </ul>
  </div>  </div>
  <div class="clearfloat"></div>
  <div class="indexques">
    <dl>
      <dt>
        <h3>News</h3>
        <p>The commonproblems we have to solve</p>
      </dt>
      <dd>
        <?php
	
	  $sql="select * from tb_gonggao "; //查询10条数据库内容
	$rs=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($rs)){
		?>
        <p><a href="xinwenlb.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></p>
        <?php    
	}	
	?>
      </dd>
    </dl>
  </div>
  <div class="indexabout"> <img src="images/about.png" width="100%"  />
    <h3>Tele</h3>
    <p><img src="images/df.png" width="40"  />Tele:000-1234567</p>
  </div>
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
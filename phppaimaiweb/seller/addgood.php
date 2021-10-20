<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add product information</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
  function spyz(form)
  {
    if(form.EAname.value=="")
      {
      alert("Please enter the title!");
      form.EAname.select();
      return(false);
      }
    if(form.jianjie.value=="")
    {
      alert("Please enter a brief introduction!");
      form.jianjie.select();
      return(false);
    }
    if(form.brand.value=="")
    {
      alert("Please enter the author!");
      form.brand.select();
      return(false);
    }
    if(form.photo.value=="")
    {
      alert("Please enter a picture!");
      form.photo.select();
      return(false);
    }
	 
    if(form.introduction.value=="")
    {
      alert("Please enter details!");
      form.introduction.select();
      return(false);
    }
  return(true);
  }
</script>
<body>
<?php
include("../conn.php");
include("header.php");
include("left.php");

if(!isset($_SESSION['busyessname'])){
	echo '<script type="text/javascript">alert("Please log in first!")</script>';
	echo '<script type="text/javascript">location.href="index.php";</script>';
	}
?>
<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;">Your current location: Manage product information -> Add product information</p>
  <br />
  <form action="saveaddgoods.php" method="post" onsubmit="return spyz(this)" enctype="multipart/form-data">
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1">
            <tr>
              <td  bgcolor="#FFFFFF"><div>Product name:</div></td>
              <td  bgcolor="#FFFFFF"><input name="EAname" type="text" id="EAname" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>Product Types:</div></td>
              <td  bgcolor="#FFFFFF"><select name="typeid" style="margin-left:10px;">
                  <?php
   $rs=mysqli_query($link,"select * from tb_type order by typeid asc");
   while($row=mysqli_fetch_array($rs)){
	   echo "<option value=".$row['typeid'].">".$row['typename']."</option>";
	   }
   ?>
                </select></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>Product Description:</div></td>
              <td  bgcolor="#FFFFFF"><input name="jianjie" type="text" id="jianjie" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Product brand:</div></td>
              <td><input name="brand" type="text" id="brand" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Commodity reserve price:</div></td>
              <td><input name="price" type="text" id="price" /></td>
            </tr>
              <tr  bgcolor="#FFFFFF">
              <td><div> a buy-in price :</div></td>
              <td><input name="oneprice" type="text" id="oneprice" value="" />
                 </td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Minimum markup:</div></td>
              <td><input name="lowprice" type="text" id="price" /></td>
            </tr>
             <tr  bgcolor="#FFFFFF">
              <td><div>Auction deadline:</div></td>
              <td><input name="overdate" type="date" id="overtime" /><input name="overtime" type="time" id="overtime" /><span>*Format: 2020-01-01</span></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Product picture:</div></td>
              <td><input name="photo" type="file" id="tp" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Product Description:</div></td>
              <td><textarea name="introduction" id="introduction" cols="30" rows="5" style="margin-left:10px;" ></textarea></td>
            </tr>
            
             <tr  bgcolor="#FFFFFF">
              <td><div>On and off shelves:</div></td>
              <td><input name="zt" type="radio" value="1" checked="checked"/>
                On
                <input name="zt" type="radio" value="0" <?php if($row['zt']==0){echo "checked";}?> />
                Off</td>
            </tr>
            <tr style="text-align:center;">
              <td colspan="2" bgcolor="#FFFFFF";><input type="submit" name="ok"  value="Submit" style=" margin-right:10px;"/>
                <input type="reset"  value="Reset"/></td>
            </tr>
          </table></td>
      </tr>
    </table>
  </form>
</div>
<div align="center"></div>
<div id="footer">
  <p>MaXinyu</p>
</div>
</body>
</html>

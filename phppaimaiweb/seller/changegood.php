<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modify product information</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("../conn.php");
include("header.php");
include("left.php");
if(!isset($_GET['id'])){
	echo '<script type="text/javascript">alert("Illegal operation!");</script>';
    echo '<script type="text/javascript">location.href="default.php"</script>';
	}
	$id=$_GET['id'];
	$rs=mysqli_query($link,"select * from tb_study where eaid='$id'") or die(mysqli_error());
	$row=mysqli_fetch_array($rs);
?>
<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;">Your current position: Commodity information management -> modify commodity information</p>
  <form action="editgood.php" method="post" onsubmit="return spyz(this)" enctype="multipart/form-data">
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1">
            <tr>
              <td  bgcolor="#FFFFFF"><div>Product name:</div></td>
              <input type="hidden" name="eaid" value="<?php echo $id;?>" />
              <td  bgcolor="#FFFFFF"><input name="EAname" type="text" id="EAname"  value="<?php echo $row['EAname'];?>" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>Product Types:</div></td>
              <td  bgcolor="#FFFFFF"><select name="typeid" style="margin-left:10px;">
                  <?php
  $rs2=mysqli_query($link,"select * from tb_type order by typeid asc");
  while($row2=mysqli_fetch_array($rs2)){
	  echo "<option value=".$row2['typeid'];
	  if($row2['typeid']==$row['typeid']){
		  echo " selected";
		  }
	  echo ">".$row2['typename']."</option>";
	  }
  ?>
                </select></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>Product Description:</div></td>
              <td  bgcolor="#FFFFFF"><input name="jianjie" type="text" id="jianjie"  value="<?php echo $row['jianjie'];?>"  /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Product brand:</div></td>
              <td><input name="brand" type="text" id="brand"  value="<?php echo $row['brand'];?>" /></td>
            </tr>
             <tr  bgcolor="#FFFFFF">
              <td><div>Commodity reserve price:</div></td>
              <td><input name="price" type="text" id="price" value="<?php echo $row['brand'];?>" /></td>
            </tr>
              <tr  bgcolor="#FFFFFF">
              <td><div>Is it a buy-in price:</div></td>
              <td><input name="oneprice" type="text" id="oneprice" value="<?php echo $row['oneprice'];?>" />
                 </td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Minimum markup:</div></td>
              <td><input name="lowprice" type="text" id="price"  value="<?php echo $row['lowprice'];?>" /></td>
            </tr>
             <tr  bgcolor="#FFFFFF">
              <td><div>Auction deadline:</div></td>
              <td><input name="overtime" type="text" id="overtime"  value="<?php echo $row['overtime'];?>"/><span>*Format: 2020-01-01</span></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Product picture:</div></td>
              <td><input name="photo" type="file" id="tp"  value="" />
                <input type="hidden" name="tp" value="<?php echo $row['photo'];?>" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>Product Description:</div></td>
              <td><textarea name="introduction" id="introduction" cols="30" rows="5" style="margin-left:10px;" ><?php echo $row['introduction'];?></textarea></td>
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

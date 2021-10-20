<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View news</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script language="javascript">
  function chkinput(form)
  {
    if(form.title.value=="")
      {
      alert("Please enter the title!");
      form.title.select();
      return(false);
      }
    if(form.content.value=="")
    {
      alert("Please enter news content!");
      form.content.select();
      return(false);
    }
  return(true);
  }
</script>
</head>
<body>
<?php
include("header.php");
include("left.php");
include("../conn.php");
?>
<div id="right" >
  <p style="background:#393d49; padding:5px 10px; color:#FFF;"><strong>Your current position: News Management -> Add News</strong></p>
  <br />
<table width="670" border="0" align="center" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="670" border="0" align="center" cellpadding="0" cellspacing="1">
<form name="form1" method="post"  onSubmit="return chkinput(this)" action="insertgg.php">
<tr>
<td width="100" height="25" bgcolor="#FFFFFF"><div align="center">Title</div></td>
<td width="647" height="25" bgcolor="#FFFFFF"><div align="left">
  <input type="text" name="title" size="50" class="inputcss" value="">
</div></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><div align="center">News content:</div></td>
<td bgcolor="#FFFFFF"><div align="left">
  <textarea name="content" cols="60" rows="8" class="inputcss"></textarea>
</div></td>
</tr>
<tr>
<td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
   
  <input type="submit" value="Add" class="buttoncss" name="submit">
 
</div></td>
</tr>
</form>
</table></td>
</tr>
</table>
</div>
<div id="footer">
  <p>MaXinyu</p>
</div>
</body>

</html>

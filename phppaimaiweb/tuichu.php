<?php
session_start();
 
session_destroy(); //Destroy session cached data
echo '<script type="text/javascript">alert("Logged out!")</script>';
echo '<script type="text/javascript">location.href="index.php";</script>';
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Art auction management</title>
</head>

<body>
</body>
</html>
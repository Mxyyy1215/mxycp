<?php
  session_start();
session_destroy();
echo '<script type="text/javascript">alert("Logged out!")</script>';
echo '<script type="text/javascript">location.href="../index.php";</script>';
?> 
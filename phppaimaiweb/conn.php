<?php session_start();   
  $link = mysqli_connect("localhost", "root" ,"root","db_sale");  //Connect to MySQL server
   mysqli_query($link,"set names utf8"); //Setting the database encoding
    ini_set('date.timezone','Asia/Shanghai');
  ?>
<?php session_start();   
  $link = mysqli_connect("localhost", "root" ,"root","db_sale");  //链接MySQL服务器
   mysqli_query($link,"set names utf8"); //设置数据库编码
    ini_set('date.timezone','Asia/Shanghai');
  ?>
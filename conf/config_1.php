<?php
 $hostname="mysql17.000webhost.com"; //mysql地址
 $basename="a9963936_test"; //mysql用户名
 $basepass="testtest1990"; //mysql密码
 $database="a9963936_test"; //mysql数据库名称

 $conn=mysql_connect($hostname,$basename,$basepass)or die("error!"); //连接mysql              
 mysql_select_db($database,$conn) or die('Could not connect to db'); //选择mysql数据库
 mysql_query("set names 'utf8'");//mysql编码
?>
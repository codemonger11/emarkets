<?php
$db_host="localhost";
$db_user="root";
$db_pwd="";
$connect=mysql_connect("$db_host","$db_user","$db_pwd") or die("Connection error");
mysql_select_db("emarkets",$connect) or die("Error selecting database");
?>


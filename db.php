<?php
$myserver="";
$dbuser="";
$dbpass="";
$dbdb="";
$con = mysql_connect($myserver,$dbuser,$dbpass) or die('Mysql Connection Failed');
mysql_select_db($dbdb,$con);
?>

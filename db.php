<?php
$myserver="204.93.216.11";
$dbuser="panky131_root";
$dbpass="root@12345";
$dbdb="panky131_site";
$con = mysql_connect($myserver,$dbuser,$dbpass) or die('Mysql Connection Failed');
mysql_select_db($dbdb,$con);
?>
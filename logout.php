<?php
include("db.php");
session_start();
if(isset($_GET["name"]))
    {
 $data = $_GET["name"];
    }

date_default_timezone_set('Asia/Calcutta');
$date= date('Y-m-d');
$time= date('H:i:s');
$query1 = "select max(id) as id from track where user_name='$data'";
$result1= mysql_query($query1);
$row = mysql_fetch_array($result1);
$query="update track set logout_date= '$date' , logout_time = '$time' where id='$row[id]'";  
$result=mysql_query($query) or die('Could not connect: ' . mysql_error());
session_unset();
$_SESSION = Array();
session_destroy();
mysql_close($con);
header("location:index.php");
exit();
?>
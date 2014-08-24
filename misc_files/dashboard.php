<?php
session_start();
include("db.php");
include("header1.php");
if (isset($_SESSION['client'])){
$uname = $_SESSION['client'];
}
$sql="select date , time from users where username='$uname'";
$result=mysql_query($sql,$con);
$row = mysql_fetch_array($result);
$date1 = $row['date'];
$time1 = $row['time'];
date_default_timezone_set('Asia/Calcutta');
$date = date('d-M-Y');
$time = date('h:i:s A');
$insert3="update users set date = '$date' , time = '$time' where username='$uname'";
$result3=mysql_query($insert3);
if($result3)
{
}
else
die('Could not connect: ' . mysql_error());
?>
<hr width="100%" style="height:1;"></hr>
<label style="float:left; width:auto; height:30px; padding-top:5px; position:relative; color:#3B65A7; font-family:Times New Roman; font-size:13px; ">
&nbsp;&nbsp;Welcome :&nbsp;&nbsp;<font style="font-size:13px; color:#DA0E03; text-transform:uppercase;"><?php echo $uname;  ?></font>&nbsp;&nbsp;&nbsp;&nbsp;Last Login :&nbsp;&nbsp;<?php echo $date1;?>&nbsp;&nbsp;<?php echo $time1; ?>
</label>
<label style=" width:auto; height:auto; float:right; position:relative; ">
<a href="profile.php" target="_self"><input type="button" name="submit" value=" Profile " style="background-color:#DA0E03; color:#ffffff; font-family:Lucia Grande; float:right; margin-right:20%; font-size:14px; cursor:pointer; font-weight:bolder; 
border-radius:2px; border:1px hidden #000000; height:30px; width:auto;">
</a>
</label>
<label style=" display:block; float:right; width:6%; visibility:hidden; font-family:Lucia Grande; font-size:18px; height:25px; 
font-weight:bolder; background-color:#D7D7D7; border:1px hidden #000000; border-radius:2px;">
</label>
<label style="float:right; width:auto; height:30px; padding-top:5px; position:relative; color:#3B65A7; font-family:Times New Roman; font-size:15px; ">
<a href="logout.php" style="color:#3B65A7; " target="_self">Log Out</a>
</label>
<br><br>
<hr width="100%" style="height:1;"></hr>
<?php
include("footer1.php");
?>
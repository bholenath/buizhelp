<?php
session_start();
include("db.php");
$name=$_POST['username'];
$pass=$_POST['password'];

if($name=="")
{
header("location:login.php?err=Please enter user name");
die();
}

else if($pass=="")
{
header("location:login.php?err=Please enter password");
die();
}

$result=mysql_query("select * from users where user_name='$name' and password='$pass'");
$row = mysql_fetch_array($result);
$num_rows = mysql_num_rows($result);

if($num_rows == 0)
{
echo "<script>alert(' Check your UserName or Password  ');</script>";
echo "<script>location.href='login.php?err=Invalid Username or Password!';</script>";
}

else if($row['verification'] != 'yes')
{
echo "<script>alert(' Please First Verify Your Account ');</script>";
echo "<script>location.href='login.php?err=Account Not Verified!';</script>";
}

else if($row['user_type'] == 'personal')
{

date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d');
$time = date('H:i:s');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


if(isset($_POST['review_biz_id']) && $_POST['review_biz_id']!="")
{
$result1=mysql_query("insert into track(date_visit,time_visit,user_name,ip_visiting,login_type) values ('$date' , '$time' , '$name' 
,'$ip' , 'review')") or die(mysql_error());
$_SESSION['loggedin'] = true;
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['user_type'] = 'personal';
$user_id = $row['user_id'];
$type = 'personal';
$biz_id = $_POST['review_biz_id'];
header("Location:business_review.php?idb=".$biz_id."&idu=".$user_id."&type=".$type);
exit();
}

else
{
$result1=mysql_query("insert into track(date_visit,time_visit,user_name,ip_visiting,login_type) values ('$date' , '$time' , '$name' 
,'$ip' , 'normal')") or die(mysql_error());
$_SESSION['loggedin'] = true;
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['user_type'] = 'personal';
header("Location:dashboard_personal.php?name=".$name);
exit();
}

}

else if($row['user_type'] == 'business')
{

date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d');
$time = date('H:i:s');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

if(isset($_POST['review_biz_id']) && $_POST['review_biz_id']!="")
{
echo '<script>alert("You cannot Review from a Business Account. Please login from a Personal Account.");</script>';
echo "<script>window.location.href='login.php?id=".$_POST['review_biz_id']."'</script>";
exit();
}

else
{
$result2=mysql_query("insert into track(date_visit,time_visit,user_name,ip_visiting,login_type) values ('$date' , '$time' , '$name' 
,'$ip' , 'normal')") or die(mysql_error());
$_SESSION['loggedin'] = true;
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['user_type'] = 'business';
header("Location:dashboard_business.php?name=".$name);
exit();
}

}
?>

<?php 
session_start();
include("db.php");
if(isset($_GET['id']))
{
$data = $_GET['id'];
}
//$user_id = $_SESSION['user_id'];
$result = mysql_query("select user_name from users where user_id=$data");
$row = mysql_fetch_array($result);
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user_type'] == 'personal') {
header("Location:business_review.php?idb=".$data."&idu=".$_SESSION['user_id']."&type=".$_SESSION['user_type']);
}
elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user_type'] == 'business') {
echo '<script>alert("You cannot Review from a Business Account. Please login from a Personal Account.");</script>';
echo "<script>window.location.href='dashboard_business.php?name=".$row['user_name']."'</script>";
exit();
}
else
{
echo "<script>alert('Please login to Review Businesses')</script>";
echo "<script>location.href='login.php?id=".$data."';</script>";
}

?>
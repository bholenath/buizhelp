<?php 
include("db.php");
$review = mysql_real_escape_string($_POST['review']);
$biz_id = mysql_real_escape_string($_POST['biz_id']);
$cat_id = mysql_real_escape_string($_POST['cat_id']);
$user_id = mysql_real_escape_string($_POST['user_id']);
$rating = mysql_real_escape_string($_POST['points']);
$insert2="insert into review(biz_id,category_id,user_id,review,rating) values ('$biz_id','$cat_id','$user_id','$review','$rating')";
$result2=mysql_query($insert2);
if($result2)
{
echo "<script> alert(' Thank You! Your Review Submitted Successfully '); </script>";
echo "<script>location.href='main_view.php?id=".$biz_id."';</script>";
}
else
die('Could not connect: ' . mysql_error());
?>

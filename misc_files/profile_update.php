<?php
include("db.php");
$dob1=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
if (!isset($_POST['photo']) && $_FILES["photo"]["size"]  < 100000 && $_FILES["photo"]["type"] == "image/jpeg" || 
$_FILES["photo"]["type"] == "image/jpg") 
{
if(file_exists("upload/".$_FILES["photo"]["name"]))
{
echo "<script>alert('  File name already exists, kindly change your filename and upload ');</script>";
echo "<script>location.href='profile.php';</script>";
exit();
}
else
{
move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
$pp = $_FILES["photo"]["name"];
$udate = "update users set name='$_POST[name1]'
 , contact='$_POST[contact]' 
 , dob='$dob1' 
 , city='$_POST[city]' , 
country='$_POST[country]' , image='$pp' where username='$_POST[username1]'";
$results = mysql_query($udate, $con);
}
if($results)
{
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='dashboard.php';</script>";
}
else
die('Could not connect: ' . mysql_error());
}
else if (!isset($_POST['photo']) && $_FILES["photo"]["size"] > 100000)
{
echo "<script>alert(' Photo Size should be less than 100KB. ');</script>";
echo "<script>location.href='profile.php';</script>";
}
else if (!isset($_POST['photo']) && $_FILES["photo"]["type"] != "image/jpeg" || $_FILES["photo"]["type"] != "image/jpg")
{
echo "<script>alert(' Incorrect Picture Format. ');</script>";
echo "<script>location.href='profile.php';</script>";
}
else
{
$insert6="update users set name='$_POST[name1]'
 , contact='$_POST[contact]' 
 , dob='$dob1' 
 , city='$_POST[city]' , 
country='$_POST[country]'   where username='$_POST[username1]'";
$result5=mysql_query($insert6, $con);
if($result5)
{
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='dashboard.php';</script>";
}
else
die('Could not connect: ' . mysql_error());
}

?>
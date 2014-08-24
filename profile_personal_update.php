<?php
include("db.php");
$dob1=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
if (is_uploaded_file($_FILES['photo']['tmp_name']) && $_FILES["photo"]["size"]  < 20000 && ($_FILES["photo"]["type"] == "image/jpeg" || 
$_FILES["photo"]["type"] == "image/jpg" || $_FILES["photo"]["type"] == "image/png"))
{
if(file_exists("upload/".$_FILES["photo"]["name"]))
{
echo "<script>alert('  File name already exists, kindly change your filename and upload ');</script>";
echo "<script>location.href='profile_personal.php?name=".$_POST['userid']."';</script>";
exit();
}
else
{
move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
$pp = $_FILES["photo"]["name"];
$udate = "update profile set fname='$_POST[name1]' , lname='$_POST[name2]'
 , contact_number='$_POST[contact1]' , mobile_number = '$_POST[contact2]'
 , dob='$dob1' , gender = '$_POST[gender]'
 , city_id='$_POST[city]' , state_id='$_POST[state]' , 
country_id='$_POST[country]' , image='$pp' where user_id='$_POST[userid]'";
$results = mysql_query($udate);
}
if($results)
{
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='dashboard_personal.php?name=".$_POST['username1']."';</script>";
}
else
die('Could not connect: ' . mysql_error());
}
else if (is_uploaded_file($_FILES['photo']['tmp_name']) && $_FILES["photo"]["size"] > 20000)
{
echo "<script>alert(' Photo Size should be less than 20KB. ');</script>";
echo "<script>location.href='profile_personal.php?name=".$_POST['username1']."';</script>";
}
else if (is_uploaded_file($_FILES['photo']['tmp_name']) && ($_FILES["photo"]["type"] != "image/jpeg" || 
$_FILES["photo"]["type"] != "image/jpg" || $_FILES["photo"]["type"] != "image/png"))
{
echo "<script>alert(' Incorrect Picture Format. ');</script>";
echo "<script>location.href='profile_personal.php?name=".$_POST['username1']."';</script>";
}
else
{
$insert6="update profile set fname='$_POST[name1]' , lname='$_POST[name2]'
 , contact_number='$_POST[contact1]' , mobile_number = '$_POST[contact2]'
 , dob='$dob1' , gender = '$_POST[gender]' 
 , city_id='$_POST[city]' , state_id='$_POST[state]' , 
country_id='$_POST[country]' where user_id='$_POST[userid]'";
$result5=mysql_query($insert6);
if($result5)
{
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='dashboard_personal.php?name=".$_POST['username1']."';</script>";
}
else
die('Could not connect: ' . mysql_error());
}

?>
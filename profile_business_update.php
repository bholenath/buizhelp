<?php
include("db.php");
$dob1=$_POST['month'].'-'.$_POST['year'];
$name=mysql_real_escape_string($_POST['name2']);
$website=mysql_real_escape_string($_POST['website']);
$address=mysql_real_escape_string($_POST['address']);
$attire=mysql_real_escape_string($_POST['attire']);
$speciality=mysql_real_escape_string($_POST['speciality']);
$ambience=mysql_real_escape_string($_POST['ambience']);
$payment = $_POST['payment'];
if($payment[0]=="1")
{
$cash=1;
}
else
$cash=0;
if($payment[1]=="1")
{
$card=1;
}
else
$card=0;
if($payment[2]=="1")
{
$voucher=1;
}
else
$voucher=0;
if($payment[3]=="1")
{
$others=1;
}
else
$others=0;
if (is_uploaded_file($_FILES['photo']['tmp_name']) && $_FILES["photo"]["size"]  < 20000 && ($_FILES["photo"]["type"] == "image/jpeg" || 
$_FILES["photo"]["type"] == "image/jpg" || $_FILES["photo"]["type"] == "image/png")) 
{
if(file_exists("upload/".$_FILES["photo"]["name"]))
{
echo "<script>alert('  File name already exists, kindly change your filename and upload ');</script>";
echo "<script>location.href='profile_business.php?name=".$_POST['username1']."';</script>";

}
else
{
$pp = $_FILES["photo"]["name"];
$udate = "update business_profile set name='$name' , country_id='$_POST[country]'
 , contact_number='$_POST[contact1]' , mobile_number = '$_POST[contact2]' , address = '$address' 
 , open_since='$dob1' , opening_hours='$_POST[opening]' , closing_hours='$_POST[closing]' , attire='$attire' ,speciality='$speciality' , 
 ambience='$ambience' , reservation='$_POST[reservation]' , parking='$_POST[parking]' ,
 couples='$_POST[couples]' , kids='$_POST[kids]' , home_delivery='$_POST[homedelivery]' , take_out='$_POST[takeout]' , 
 waiter_service='$_POST[waiterservice]' , outdoor_seating='$_POST[outdoorseating]' , 
 alcohol='$_POST[alcohol]' , tv='$_POST[tv]' , catering='$_POST[catering]' , wheel_chair='$_POST[wheelchair]' , 
 noise_id='$_POST[noise]' , city_id='$_POST[city]' , state_id='$_POST[state]' , website='$website' , category_id='$_POST[category]' ,  cash='$cash'  , card='$card', voucher='$voucher', others='$others', image='$pp' , area_id='$_POST[area]' , groups='$_POST[group]' , wi_fi='$_POST[wifi]'  , gender = '$_POST[gender]' , beds = '$_POST[beds]' , rooms = '$_POST[rooms]'  where user_id='$_POST[userid]'";
$results = mysql_query($udate);
}
if($results)
{
move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='dashboard_business.php?name=".$_POST['username1']."';</script>";
}
else
die('Could not connect: ' . mysql_error());
exit();
}
else if (is_uploaded_file($_FILES['photo']['tmp_name']) && $_FILES["photo"]["size"] > 20000)
{
echo "<script>alert(' Photo Size should be less than 20KB. ');</script>";
echo "<script>location.href='profile_business.php?name=".$_POST['userid']."';</script>";
}
else if (is_uploaded_file($_FILES['photo']['tmp_name']) && ($_FILES["photo"]["type"] != "image/jpeg" || 
$_FILES["photo"]["type"] != "image/jpg" || $_FILES["photo"]["type"] != "image/png"))
{
echo "<script>alert(' Incorrect Picture Format. ');</script>";
echo "<script>location.href='profile_business.php?name=".$_POST['username1']."';</script>";
}
else
{
$insert6="update business_profile set name='$name' , country_id='$_POST[country]', contact_number='$_POST[contact1]' , mobile_number = '$_POST[contact2]' , address = '$address' , open_since='$dob1' , opening_hours='$_POST[opening]' , closing_hours='$_POST[closing]' , attire='$attire' , speciality='$speciality' , ambience='$ambience' , reservation='$_POST[reservation]' , parking='$_POST[parking]' , couples='$_POST[couples]' , kids='$_POST[kids]' , home_delivery='$_POST[homedelivery]' , take_out='$_POST[takeout]' , waiter_service='$_POST[waiterservice]' , outdoor_seating='$_POST[outdoorseating]' ,  alcohol='$_POST[alcohol]' , tv='$_POST[tv]' , catering='$_POST[catering]' , wheel_chair='$_POST[wheelchair]' , noise_id='$_POST[noise]' , city_id='$_POST[city]' , state_id='$_POST[state]' , category_id='$_POST[category]' , website='$website' ,  cash='$cash'  , card='$card', voucher='$voucher', others='$others', area_id='$_POST[area]' , groups='$_POST[group]' , wi_fi='$_POST[wifi]'  
, gender = '$_POST[gender]' , beds = '$_POST[beds]' , rooms = '$_POST[rooms]' where user_id='$_POST[userid]'";
$result5=mysql_query($insert6);
if($result5)
{
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='dashboard_business.php?name=".$_POST['username1']."';</script>";
}
else
die('Could not connect: ' . mysql_error());
exit();
}

?>
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
echo "<script>alert('File name already exists, kindly change your filename and upload');</script>";
echo "<script>location.href='admin.php';</script>";
}
else
{
$pp = $_FILES["photo"]["name"];
$udate = "insert into business_profile( name,country_id , contact_number , mobile_number , address, open_since, opening_hours, closing_hours , attire,speciality,ambience, reservation, parking,couples, kids, home_delivery, take_out, waiter_service, outdoor_seating, alcohol, tv, catering, wheel_chair , noise_id, city_id, state_id, website , category_id,  cash, card, voucher, others, image, area_id, groups, wi_fi, gender , user_id , beds , rooms ) values ('$name' , '$_POST[country]','$_POST[contact1]','$_POST[contact2]','$address' 
,'$dob1' ,'$_POST[opening]' ,'$_POST[closing]','$attire','$speciality','$ambience','$_POST[reservation]','$_POST[parking]' ,'$_POST[couples]' ,'$_POST[kids]','$_POST[homedelivery]','$_POST[takeout]','$_POST[waiterservice]','$_POST[outdoorseating]' ,'$_POST[alcohol]','$_POST[tv]','$_POST[catering]','$_POST[wheelchair]','$_POST[noise]','$_POST[city]','$_POST[state]' ,'$website','$_POST[category]','$cash','$card','$voucher','$others','$pp','$_POST[area]','$_POST[group]','$_POST[wifi]',
'$_POST[gender]' , 0 , '$_POST[beds]' , '$_POST[rooms]')";
$results = mysql_query($udate);
}
if($results)
{
move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='admin.php';</script>";
}
else
die('Could not connect: ' . mysql_error());
exit();
}
else if (is_uploaded_file($_FILES['photo']['tmp_name']) && $_FILES["photo"]["size"] > 20000)
{
echo "<script>alert(' Photo Size should be less than 20KB. ');</script>";
echo "<script>location.href='admin.php';</script>";
}
else if (is_uploaded_file($_FILES['photo']['tmp_name']) && ($_FILES["photo"]["type"] != "image/jpeg" || 
$_FILES["photo"]["type"] != "image/jpg" || $_FILES["photo"]["type"] != "image/png"))
{
echo "<script>alert(' Incorrect Picture Format. ');</script>";
echo "<script>location.href='admin.php';</script>";
}
else
{
$insert6="insert into business_profile( name,country_id , contact_number , mobile_number , address, open_since, opening_hours, closing_hours , attire,speciality,ambience, reservation, parking,couples, kids, home_delivery, take_out, waiter_service, outdoor_seating, alcohol, tv, catering, wheel_chair , noise_id, city_id, state_id, website , category_id,  cash, card, voucher, others, area_id, groups, wi_fi, gender , user_id , beds , rooms ) values ('$name' , '$_POST[country]','$_POST[contact1]','$_POST[contact2]','$address' 
,'$dob1' ,'$_POST[opening]' ,'$_POST[closing]','$attire','$speciality','$ambience','$_POST[reservation]','$_POST[parking]' ,'$_POST[couples]' ,'$_POST[kids]','$_POST[homedelivery]','$_POST[takeout]','$_POST[waiterservice]','$_POST[outdoorseating]' ,'$_POST[alcohol]','$_POST[tv]','$_POST[catering]','$_POST[wheelchair]','$_POST[noise]','$_POST[city]','$_POST[state]' ,'$website','$_POST[category]','$cash','$card','$voucher','$others','$_POST[area]','$_POST[group]','$_POST[wifi]',
'$_POST[gender]' , 0 , '$_POST[beds]' , '$_POST[rooms]')";
$result5=mysql_query($insert6);
if($result5)
{
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='admin.php';</script>";
}
else
die('Could not connect: ' . mysql_error());
exit();
}

?>
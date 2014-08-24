<?php
include("db.php");
require_once('/phpmail/class.phpmailer.php');
require_once('/phpmail/class.smtp.php');
$name=trim($_POST['username1']);
$sql="select * from users where user_name='$name'";
$result=mysql_query($sql,$con) or die('Could not connect : ' . mysql_error());
$num_rows=mysql_num_rows($result);
$row=mysql_fetch_array($result);
if($num_rows != 0)
{
echo "<script>alert(' UserName already Exist Log In if Account Already Have ');</script>";
echo "<script>location.href='signup.php';</script>";
}
else if($num_rows == 0)
{
$pass=trim($_POST['password1']);
$type=trim($_POST['accounttype']); 
$gender=trim($_POST['gender']);
$insert1="INSERT INTO users(user_name,password,user_type,gender) VALUES('$name','$pass','$type','$gender')";
$result1=mysql_query($insert1) or die('Could not connect : ' . mysql_error());
$insert0="select * from users where user_name='$name'"; 
$result0=mysql_query($insert0) or die('Could not connect : ' . mysql_error());
$row1=mysql_fetch_array($result0);
if($row1['user_type']=='personal')
{
$insert2="INSERT INTO profile(user_id , gender) VALUES('$row1[user_id]' , '$row1[gender]')";
$result2=mysql_query($insert2) or die('Could not connect : ' . mysql_error());
}
else if($row1['user_type']=='business')
{
$insert2="INSERT INTO business_profile(user_id , gender) VALUES('$row1[user_id]' , '$row1[gender]')";
$result2=mysql_query($insert2) or die('Could not connect : ' . mysql_error());
}
$message="  											
<html>
<head></head>
<body>
<div style=' padding-left:20px; padding-right:20px; width:auto; height:auto;'>
<div style='display:block; padding-left:15px; padding-right:15px; position:relative; padding-top:10px; padding-bottom:10px; width:auto; height:auto;  border: 1px hidden #FFD735; background-color:#ffffff; border-radius:1px;'>
<center><font style='color:#C41200; font-size:21px; font-weight:bolder; '> <u>Buizhelp Log In Information</u> </font></center><br><br>
<font style='color:#000000; font-size:14px; text-align:justify; '>Dear User, <br><br>&nbsp;&nbsp; Welcome to BuizHelp . We are happy to know that you have shown keen interest in our site.<br><br> Your Username :  <font style=' font-weight:bold'> ".$name."</font><br><br> Your Password :<font style=' font-weight:bold'> ".$pass."</font><br><br> Your Account Type : <font style=' font-weight:bold'> ".$type."</font><br><br> Click on the Below Link to Continue your Experience with Buizhelp <br><br></font>
<center>
<a href='http://www.buizhelp.com/update.php?data=".$name."' target='_blank'>
<input type='button' name='submit' value='Verify' style='background-color:#498AF3; color:#ffffff; font-family:Lucia Grande; font-size:14px; cursor:pointer; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:auto;'>
</a>
</center>
<br><br>
</div>
</div>
</body>
</html>";

$to_name = "Newbee";
$to = $name;

$subject = " New Account Acknowledgement ";

$from_name = "Admin";
$from = "info@buizhelp.com";

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPDebug  = 2;
$mail->Host = "webmail.buizhelp.com";
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = "info@buizhelp.com";
$mail->Password = "buizhelp@1234";


$mail->FromName = $from_name;
$mail->From = $from;
$mail->AddAddress($to, $to_name);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->IsHTML(true);

$result = $mail->Send();

echo "<script> alert (' Click on the Link sent to your Mail Id to Continue with Us '); </script>";
echo "<script>location.href='login.php';</script>";

}
?>
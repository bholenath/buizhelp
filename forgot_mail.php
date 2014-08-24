<?php
require_once('/phpmail/class.phpmailer.php');
require_once('/phpmail/class.smtp.php');
include("db.php");
$uname=$_POST['username4'];
$sql="select * from users where user_name='$uname'";
$result5=mysql_query($sql,$con);
$num_rows1=mysql_num_rows($result5);
if($num_rows1 == 0)
{
echo "<script>alert(' Check your UserName. No such Data Exists  ');</script>";
echo "<script>location.href='forgot.php?err=Invalid Username';</script>";
}
else
{
$random=mt_rand(100000,999999);
$pass=urlencode(base64_encode($random));

$subject = " Buizhelp Account Recovery Password ";

$message="  											
<html>
<head></head>
<body>
<div style=' padding-left:20px; padding-right:20px; width:auto; height:auto;'>
<div style='display:block; padding-left:15px; padding-right:15px; position:relative; padding-top:10px; padding-bottom:10px; width:auto; height:auto;  border: 1px hidden #FFD735; background-color:#ffffff; border-radius:1px;'>
<center><font style='color:#C41200; font-size:21px; font-weight:bolder; '> <u>Recovering Your Password</u> </font></center><br><br>
<font style='color:#000000; font-size:14px; text-align:justify; '>Dear User,<br><br>&nbsp;&nbsp; It has been requested from you to generate a new password for your Buizhelp Account. <br><br> Your Username :  <font style=' font-weight:bold'> ".$uname."</font><br><br> Your New Password : <font style=' font-weight:bold'> ".$random."</font><br><br> Click on the Below Link to confirm your Password Change</font><br><br> 
<center>
<a href='http://www.buizhelp.com/update1.php?data=".$uname."&data2=".$pass."' target='_blank'>
<input type='button' name='submit' value='Verify' style='background-color:#498AF3; color:#ffffff; font-family:Lucia Grande; font-size:14px; cursor:pointer; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:auto;'>
</a>
</center>
<br><br>
</div>
</div>
</body>
</html>";

$to_name = "Newbee";
$to = $uname;

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

/*echo "<script> alert (' Check your Email for your new Account Password '); </script>";*/
echo "<script>location.href='forgot.php';</script>";
}
?>
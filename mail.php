<?php
require_once('/phpmail/class.phpmailer.php');
require_once('/phpmail/class.smtp.php');

$msg 	= trim(mysql_escape_string($_POST['message1']));
$mid 	= trim(mysql_escape_string($_POST['mail1']));
$contact= trim(mysql_escape_string($_POST['phone1']));
$subject= trim(mysql_escape_string($_POST['subject1']));
$name 	= trim(mysql_escape_string($_POST['name1']));

$message="<html><body>
<div style=' padding-left:20px; padding-right:20px; width:auto; height:auto;'>
<div style='display:block; padding-left:15px; padding-right:15px; position:relative; padding-top:10px; padding-bottom:10px; width:auto; height:auto;  border: 1px hidden #FFD735; background-color:#ffffff; border-radius:1px;'>
<center><font style='color:#C41200; font-size:21px; font-weight:bolder; '> <u> User Query </u> </font></center>
<br>
<font style='color:#000000; font-size:14px; text-align:justify;'><b>Message :&nbsp;&nbsp;&nbsp;</b>".$msg."</font>
<br><br>
<font style='color:#000000; font-size:13px; text-align:justify;'><b>Contact No. :&nbsp;&nbsp;&nbsp;</b>".$contact."</font>
<br><br>
<font style='color:#000000; font-size:13px; text-align:justify; text-transform:capitalize;'><b>From :&nbsp;&nbsp;&nbsp;</b>".$name."
</font>
</center>
<br><br>
</div>
</div>
</body></html>";

$to_name = "Admin";
$to = "info@buizhelp.com";

$from_name = $name;
$from = $mid;

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPDebug = 2;
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

if($result)
{
echo "<script> alert('Thank You your query has been Submitted!');</script>";
echo "<script>location.href='index.php';</script>";
}
else
{
echo "<script> alert('Sorry! Mail can\'t be sent. Please try Again.');</script>";
echo "<script>location.href='contact_us.php';</script>";
}
?>



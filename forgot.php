<?php
include("header1.php");
?>
<hr width="98%" style="height:1;"></hr>

<center>

<div style=" display:block; position:relative; padding-left:8%; padding-right:8%; padding-top:4%; 
padding-bottom:4%; width:auto;">

<div style="display:block; position:relative; padding-left:4%; padding-right:4%; position:relative; padding-top:3%; padding-bottom:3%; 
width:auto; border: 1px solid #FFD735; background-color:#FDF7E1; border-radius:5px;">

<label style=" display:block; width:100%; margin-bottom:8%; text-align:center; font-family:Times New Roman; 
font-size:14px; height:auto;">
<font style="color:#C41200; font-size:21px; font-weight:bolder; ">Recover Your Password</font>
</label>

<form name="details2" method="post" action="forgot_mail.php" target="_self" onSubmit="return validate3();">

<div style="position:relative; width:70%; height:auto;">

<label style=" display:block; float:left; width:33%; font-family:Arial; font-size:14px; height:auto; 
font-weight:bolder; margin-left:15%; margin-right:2%;">
<input type="text" name="txt" value="UserName/E-Mail Id" style="width:100%; border:0; color:#c41200; font-weight:bold; 
font-size:16px; position:relative; cursor:default; background:inherit; font-family:Times New Roman; ">
</label>

<label style=" display:block; float:left; position:relative; width:35%; height:23px; font-family:Arial; 
font-size:14px;  font-weight:bolder; margin-right:12%; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="username4"  placeholder="Enter your UserName" maxlength="64" onfocus="clearinputText6();" 
style="border:1px hidden #000000;  position:relative;  padding:2px; width:97%; border-radius:1px; background-color:#ffffff; 
outline:none;">
</label>

<br><br>

<label style="display:block; position:relative; width:100%; margin-top:2%; font-family:Arial; font-size:14px; height:auto; 
font-weight:bolder;">
<input type="submit" name="submit" value="Submit" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; position:relative; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:auto;">
</label>

<label style=" display:block; width:100%; font-weight:bold; margin-top:3%; font-family:Times New Roman; font-size:14px; height:auto;">
<font style="color:#C41200;">An autogenerated password will be sent to your email id. If not recieve in your inbox kindly check into you spam folder and mark it as not spam.</font>
</label>

</div>

</form>

</div>

</div>

</center>

<center>

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>
<?php
include("footer1.php");
?>
 
</label> 

</div>

</center>
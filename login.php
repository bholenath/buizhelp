<?php
include("header1.php");
if(isset($_GET['id']))
{
$data = $_GET['id'];
}
?>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
} 
a:active {
	text-decoration: none;
}
 
-->
</style>

<hr width="98%" style="height:1;"></hr>

<div style=" display:block; float:left; position:relative; padding-left:8%; padding-right:8%; padding-top:4%; 
padding-bottom:4%; width:auto;">

<div style="display:block; position:relative; padding-left:4%; padding-right:4%; position:relative; padding-top:3%; padding-bottom:3%; 
width:auto; float:left; border: 1px solid #FFD735; background-color:#FDF7E1; border-radius:5px;">

<div style="width:48%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; float:left; display:block;  height:auto; position:relative; margin-right:1%; border-right:1px #FFD735 solid;"> 

<label style=" display:block; float:left; width:77%; margin-bottom:0.2%; text-align:justify; font-family:Times New Roman; 
font-size:14px; height:auto;">
<font style="color:#C41200; font-size:21px; font-weight:bolder; ">Log In</font>
</label>
<label style=" display:block; float:left; width:77%; margin-bottom:8%; text-align:justify; font-family:Times New Roman; 
font-size:14px; height:auto;">
<font style="color:#000000; font-size:13px; font-weight:600px; ">Please Enter a valid Username and Password to Log In</font>
</label>

<form name="details" method="post" action="checking.php" target="_self" onSubmit="return validate1()">
<?php 
if(isset($_GET['id']))
{
if(trim($data)!="")
{
echo '<input type="hidden" name="review_biz_id" value="'.$data.'">';
}
}
?>
<label style=" display:block; float:left; width:33%; font-family:Arial; font-size:14px; height:auto; 
font-weight:bolder; margin-right:2%;">
<input type="text" name="txt" value="UserName" style="width:100%; border:0; color:#c41200; font-weight:bold; 
font-size:16px; position:relative; cursor:default; background:inherit; font-family:Times New Roman; ">
</label>

<label style=" display:block; float:left; width:42%; font-family:Arial; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; border:1px solid #007eff; border-radius:2px;">
<input type="text" name="username" tabindex="1"  placeholder="Enter your UserName" maxlength="64" 
style="border:1px hidden #000000;  padding:2px; width:97%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

<label style=" display:block; width:77%; float:left; margin-top:2%; margin-bottom:2%; "></label>

<label style=" display:block; float:left; width:33%; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;
 margin-right:2%;">
<input type="text" name="txt" value="Password" style="width:100%; border:0; color:#c41200; font-weight:bold; 
font-size:16px; position:relative; cursor:default; background:inherit; font-family:Times New Roman; ">
</label>

<label style=" display:block; float:left; width:42%; font-family:Arial; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; border:1px solid #007eff; border-radius:2px;">
<input type="password" name="password" tabindex="2" placeholder="Enter your Password" maxlength="14" 
style="border:1px hidden #000000;  padding:2px; width:97%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

<label style=" display:block; float:left; width:42%; margin-left:35%; margin-top:2%; font-family:Times New Roman; 
font-size:11px; height:auto;">
<font style="color:#3B65A7;"><a href="forgot.php">Forgot Your Password ?</a></font>
</label>

<label style=" display:block; float:left; width:42%; margin-left:35%; margin-top:3%; font-family:Arial; font-size:14px; 
height:auto; font-weight:bolder;">
<input type="submit" name="submit" value="Log In" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; float:right; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:auto;">
</label>

<label style=" display:block; float:left; margin-top:3%; width:77%; text-align:justify; font-family:Times New Roman; 
font-size:14px; height:auto;">
<font style="color:#000000;">By logging in you agree to Buizhelp's Terms of Service and Privacy Policy.</font>
</label>

</form>

</div>

<center>

<div style="width:50%; margin-left:1%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; 
float:left; display:block; height:auto; position:relative;">

<label style=" display:block; width:auto; margin-bottom:0.2%; text-align:center; font-family:Times New Roman; 
font-size:14px; height:auto;">
<font style="color:#C41200; font-size:21px; font-weight:bolder; ">No Account Yet ?</font>
</label>

<label style=" display:block; width:auto; margin-bottom:6%; text-align:center; font-family:Times New Roman; 
font-size:14px; height:auto;">
<font style="color:#000000; font-size:14px; font-weight:600px; ">That's okay, we still love you.</font>
</label>

<label style=" display:block; width:auto; text-align:center; font-family:Times New Roman; font-size:11px; height:auto;">
<a href="signup.php" target="_self"><input type="button" name="submit" value="Sign Up" style="background-color:#DA0E03; color:#ffffff; font-family:Lucia Grande; font-size:14px; cursor:pointer; font-weight:bolder; border-radius:2px; border:1px hidden #000000; 
height:30px; width:auto;"></a>
</label>

<label style=" display:block; width:auto; margin-top:7%; text-align:center; font-family:Times New Roman; 
font-size:14px; height:auto;">
<font style="color:#000000; font-size:15px; font-weight:600px; ">
Buizhelp is the fun and easy way to find, review and talk about what's great - and not so great - in your local area. It's about real people giving their honest and personal opinions on everything from restaurants and spas to coffee shops and bars.</font>
</label>

</div>

</center>

</div>

</div>

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

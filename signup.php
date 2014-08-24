<?php
include("header1.php");
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
body {
	background-color: #F5FFFA;
}
-->
</style>

<hr width="98%" style="height:1;"></hr>

<center>

<div style="display:block; position:relative; padding:2% 8%; width:auto;">

<div style="display:block; position:relative; padding:2% 4%; width:auto; border-radius:5px;">

<label style=" display:block; width:77%; margin-bottom:0.2%; text-align:center; font-family:Times New Roman; font-size:14px;">

<font style="color:#C41200; font-size:21px; font-weight:bolder; ">Sign Up for Buizhelp</font>

</label>

<label style=" display:block; width:77%; margin-bottom:4%; text-align:center; font-family:Times New Roman; font-size:14px;">

<font style="color:#000000; font-size:13px; font-weight:600; ">Connect with your local Businesses</font>

</label>

<form name="details1" method="POST" action="entering.php" target="_self" onSubmit="return validate2()">

<label style=" display:block;  width:30%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">

<input type="text" name="username1" placeholder="UserName/E-mail Id" maxlength="64" onfocus="clearinputText3();" 
style="border:1px hidden #000000; text-align:center; padding-top:2px; font-size:14px; font-family:Times New Roman; width:100%; 
border-radius:1px; background-color:#ffffff; outline:none;">

</label>

<font style="color:#3B65A7; font-size:11px; font-family:Times New Roman;"> * UserName must be Your Mail Id  </font>

<label style=" display:block; width:30%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; margin-top:0.7%; border:1px solid #BBBBBB; border-radius:2px;">

<input type="password" name="password1" placeholder="Choose your Password" maxlength="14" onfocus="clearinputText4();" 
style="border:1px hidden #000000; text-align:center; font-size:14px; font-family:Times New Roman; padding-top:2px; width:100%; 
border-radius:1px; background-color:#ffffff; outline:none;">

</label>

<label style=" display:block; width:30%; margin-top:2%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">

<input type="password" name="password2" placeholder="Confirm your Password" maxlength="14" onfocus="clearinputText5();" 
style="border:1px hidden #000000; text-align:center; font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; 
border-radius:1px; background-color:#ffffff; outline:none;">

</label>

<font style="color:#3B65A7; font-size:11px; font-family:Times New Roman;"> * Password Must Be Between 6-14 Characters Long </font>

<div style=" width:100%; display:block; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder;">

<input type="radio" name="gender" id="male" value="male" style="border:1px hidden #000000; text-align:center;  font-size:14px; 
padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">

<font style="color:#000000;"> Male </font>

<input type="radio" name="gender" id="female" value="female" style="border:1px hidden #000000; text-align:center;  font-size:14px; 
padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">

<font style="color:#000000;"> Female </font>

</div>

<font style="color:#3B65A7; font-size:11px; font-family:Times New Roman;"> * Choose your Gender Type  </font>

<div style=" width:100%; display:block; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder;">

<input type="radio" name="accounttype" id="business" value="business" style="border:1px hidden #000000; text-align:center; 
font-size:14px; padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">

<font style="color:#000000;"> Business Account </font>

<input type="radio" name="accounttype" id="personal" value="personal" style="border:1px hidden #000000; text-align:center; 
font-size:14px; padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">

<font style="color:#000000;"> Personal Account </font>

</div>

<font style="color:#3B65A7; font-size:11px; font-family:Times New Roman;"> * Choose your Preference for the Account Type.  </font>

<label style=" display:block; width:100%; margin-top:2%; font-family:Times New Roman; font-size:14px; height:auto;">
<font style="color:#000000;">By creating an account, you agree to Buizhelp's Terms of Service and Privacy Policy .</font>
</label>

<label style=" display:block; margin-bottom:1%; margin-top:2%; width:72%; font-family:Arial; font-size:14px; height:auto; 
font-weight:bolder;">

<input type="submit" name="submit" value="Sign Up" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; 
font-family:Lucida Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:42%;">

</label>

<label style=" display:block; width:72%; font-family:Times New Roman; font-size:13px; height:auto;">
<font style="color:#3B65A7;">Already on Buizhelp?<a href="login.php"><u> Log In </u></a></font>
</label>

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
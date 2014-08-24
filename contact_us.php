<?php
include("header1.php");
?>

<hr width="98%" style="height:1;"></hr>

<div style=" display:block; position:relative; padding:1%; width:98%; height:auto;">

<div style="width:100%; position:relative; display:block; overflow:hidden; height:auto; float:left; border-bottom: 1px hidden #000000;">

<font style="color:#C41200; font-size:21px; font-weight:bolder; "><u> Contact Us </u></font>

<label style=" display:block; position:relative; width:100%; margin:1.5%; "></label>

<form action="mail.php" method="post" id="contact_frm" name="contact_frm" target="_self" onSubmit="return validate6()">
			
<div style=" display:block; width:48%; padding:0 1%; padding-bottom:2%; position:relative; float:left; ">

<label style=" display:block; margin:0 1%; float:left; margin-bottom:2%; position:relative; width:30%; ">

<input type="text" name="name" value=" Name * " readonly="readonly" style="border:1px hidden #000000; text-align:left; font-size:16px; 
font-weight:bold; padding-top:2px; color:#000000; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

<label class="box" style=" display:block; width:64%; position:relative; font-family:Times New Roman; font-size:13px; font-weight:bold; 
margin-bottom:2%; padding-right:2%;  border:1px solid #008AD9; border-radius:2px; float:right;">

<input type="text" tabindex="1" name="name1" id="name1" placeholder="Your Name" maxlength="64" required 
style=" border:1px hidden #000000; color:#000000; text-align:left; padding:2px 4px; font-size:14px; font-family:Times New Roman; 
width:100%; outline:none; ">

</label>

<label style=" display:block; margin:0 1%; float:left; margin-bottom:2%; position:relative; width:30%;">

<input type="text" name="mail" value=" E-Mail Id * " readonly="readonly" style="border:1px hidden #000000; text-align:left; 
font-size:16px; font-weight:bold; padding-top:2px; color:#000000; font-family:Times New Roman; width:100%; border-radius:1px; ">

</label>

<label class="box" style=" display:block; width:64%; position:relative; font-family:Times New Roman; font-size:13px; font-weight:bold; 
margin-bottom:2%; padding-right:2%;  border:1px solid #008AD9; border-radius:2px; float:right;">

<input type="text" tabindex="2" name="mail1" id="email" placeholder="Your Mail Id" maxlength="64" required 
style=" border:1px hidden #000000; color:#000000; text-align:left; padding:2px 4px; font-size:14px; font-family:Times New Roman; 
width:100%; outline:none; ">

</label>

<label style=" display:block; margin:0 1%; float:left; margin-bottom:2%; position:relative; width:30%; ">

<input type="text" name="phone" value=" Contact No. " readonly="readonly" style="border:1px hidden #000000; 
text-align:left; font-size:16px; font-weight:bold; padding-top:2px; color:#000000; font-family:Times New Roman; width:100%; 
border-radius:1px; ">

</label>

<label class="box" style=" display:block; width:64%; position:relative; font-family:Times New Roman; font-size:13px; font-weight:bold; 
margin-bottom:2%; padding-right:2%;  border:1px solid #008AD9; border-radius:2px; float:right;">

<input type="text" tabindex="3" name="phone1" id="phone1" placeholder="Your Contact No." maxlength="64" 
style=" border:1px hidden #000000; color:#000000; text-align:left; padding:2px 4px; font-size:14px; font-family:Times New Roman; 
width:100%; outline:none; ">

</label>

<label style=" display:block; margin:0 1%; float:left; margin-bottom:2%; position:relative; width:30%;">

<input type="text" name="subject" value=" Subject * " readonly="readonly" style="border:1px hidden #000000; 
text-align:left; font-size:16px; font-weight:bold; padding-top:2px; color:#000000; font-family:Times New Roman; width:100%; 
border-radius:1px; ">

</label>

<label class="box" style=" display:block; width:64%; position:relative; font-family:Times New Roman; font-size:13px; font-weight:bold; 
margin-bottom:2%; padding-right:2%;  border:1px solid #008AD9; border-radius:2px; float:right;">

<input type="text" tabindex="4" name="subject1" id="subject1" placeholder="Your Subject of Writing" maxlength="64" required 
style=" border:1px hidden #000000; color:#000000; text-align:left; padding:2px 4px; font-size:14px; font-family:Times New Roman; 
width:100%; outline:none; ">

</label>

<span style=" display:block; float:left; position:relative; width:100%;">

<label style=" display:block; margin:0 1%; float:left; position:relative; width:30%;">

<input type="text" name="message" value=" Message * " readonly="readonly" style="border:1px hidden #000000; text-align:left; 
font-size:16px; font-weight:bold; padding-top:2px; color:#000000; font-family:Times New Roman; width:100%; border-radius:1px; ">

</label>

<label class="box" style=" display:block; width:64%; position:relative; font-family:Times New Roman; font-size:13px; font-weight:bold; 
padding-right:2%; border:1px solid #008AD9; border-radius:2px; float:right;">

<textarea name="message1" tabindex="5" required id="message1" placeholder="Your Message" rows="3" maxlength="200" 
style="border:1px hidden #000000; position:relative; font-size:14px; padding:4px; font-family:Times New Roman; width:100%; 
border-radius:1px; height:auto; color:#000000; text-align:left; outline:none; ">
</textarea>

</label>

</span>

<span style="color:#C41200; float:left; width:100%; margin-bottom:1%; font-size:13px; font-family:times new roman; font-weight:500; "> 
* Fields are Compulsory </span>

<span style=" display:block; margin-bottom:1%; float:left; position:relative; width:50%;">

<label style=" display:block; margin:0 1%; float:left; position:relative; width:46%;">

<input type="submit" tabindex="6" name="submit" value="Send" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; 
font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%;">

</label>


<label style=" display:block; width:46%; position:relative; float:right;">

<input type="reset" tabindex="7" name="submit" value="Reset" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; 
font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%;">

</label>

</span>

</div>

</form>

<div style=" display:block; width:48%; padding:0 1%; padding-bottom:2%; position:relative; float:right; ">

<label style=" display:block; margin:0 1%; float:left; margin-bottom:2%; position:relative; width:100%; font-family:Lucia Grande; 
font-size:21px; color:#c41200; font-weight:bold; text-align:center;">
<u>BuizHelp Service</u>
</label>

<label style=" display:block; margin:0 1%; float:left; margin-bottom:2%; position:relative; width:100%; font-family:Lucia Grande; 
font-size:15px; color:#000000; font-weight:500; text-align:center;">
Send your Queries relating our Service and Information...Help to make us Better! <br>
Please provide your Contact Details so we may Contact you...We always wish to Serve you.....
</label>

<label style=" display:block; margin:0 1%; float:left; margin-bottom:2%; position:relative; width:100%; font-family:Lucia Grande; 
font-size:15px; color:#c41200; font-weight:bold; text-align:center;"> You can also Call Us Anytime 24*7 <br>
<span style=" float:left; width:100%; margin:1% 0;"></span>
<font style="color:#176CED; font-size:16px; font-weight:bolder; display:inline; ">
<img src="images/Skype Phone Blue.png" style="vertical-align:middle;">&nbsp;&nbsp;+91 - 9045678910</font><br><br>
Or Mail Us Directly to&nbsp;&nbsp;
<a href="mailto:info@buizhelp.com" target="_blank" style="color:#176CED; font-size:16px; font-weight:bolder;">info@buizhelp.com</a>
</font>
</label>

</div>

</div>

</div>			
			
<center>

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>
<?php
include("footer.php");
?>
 
</label> 

</div>

</center>

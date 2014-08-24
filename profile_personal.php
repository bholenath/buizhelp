<?php

if(isset($_GET["name"]))
    {
    $data = $_GET["name"];
       
    }
include("header1.php");
include("db.php");
$query = "SELECT users.user_name as user_name , users.user_id as user_id, profile.*
FROM users, profile
WHERE users.user_id = profile.user_id and users.user_name = '$data'";
$result=mysql_query($query,$con) or die(mysql_error());
$row = mysql_fetch_array($result);
$date1 = $row['dob'];
$substr= explode("-", $date1);
$day1 = $substr[2];
$month1 = $substr[1];
$year1 = $substr[0];
$addr = $row['image'];
$country = $row['country_id'];
$gender = $row['gender'];
$iname=htmlspecialchars($data);
$_SESSION['client3']=$iname;
?>

<script type="text/javascript">

	function take()	
	{
	"<?php 	
	if (isset($_SESSION['client3']))   
    $name = $_SESSION['client3'];	
	?>"	
	}
	
	var id1 = "<?php echo $name; ?>";	
	var timer = 0;	   
		
	function set_interval() 
	{ 	
	//id1 = "<?php $_SESSION['client'] ?>"; 
   	timer = setInterval(function(){ auto_logout() }, 300000);	
	}

	function reset_interval() 
	{ 
	if(timer!=0)
	{	
  	clearInterval(timer);	
    timer = 0; 	
    timer = setInterval(function(){ auto_logout() }, 300000);		
	}
  	}	
	
	function auto_logout() 
	{ 	
  	window.location.href = "logout.php?name="+id1;
	}
	
	//window.onbeforeunload = auto_logout();		

</script>

<body onLoad="set_interval()" onLoad="take()" onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" 
onscroll="reset_interval()" onUnload="auto_logout()">

<hr width="98%" style="height:1;"></hr>

<div style=" display:block; position:relative; padding-top:1%; padding-left:1%; padding-right:1%; padding-bottom:1%; 
width:98%; height:auto;">

<center>

<div style="width:100%; position:relative; display:block; overflow:hidden; height:auto; float:left; border-bottom: 1px hidden #000000;
background-color:#ffffff;">

<font style="color:#C41200; font-size:21px; font-weight:bolder; ">Your Profile</font><br>
<font style="color:#000000; font-size:14px; font-weight:bold; ">Please fill your Relevant Information.</font>

<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:9px; font-weight:bolder; border:1px hidden #007eff;">
</label>

<form name="details3" id="details3" method="POST" action="profile_personal_update.php" target="_self" onSubmit="return validate4()" 
enctype="multipart/form-data">

<div style=" display:block; width:80px; position:relative; font-family:Arial; font-size:14px; height:80px; font-weight:bolder;">

<label style=" display:block; width:80px; position:relative; font-family:Times New Roman;  height:80px; 
font-weight:bolder;  background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">

<input type="hidden" name="userid"  value="<?php echo $row['user_id']; ?>" >
<?php 
$aExtraInfo1 = getimagesize("upload/".$addr);
$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$addr));
echo '<img src="' . $sImage1 . '" width="80px" height="80px"  />'; 
?>

</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:auto; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="username1" placeholder="UserName/E-mail Id" value="<?php echo $row['user_name']; ?>" 
readonly="readonly" maxlength="64" style=" border:1px hidden #000000; color:#999999; text-align:center; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; background-color:#ffffff; font-size:14px; outline:none;">
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="name1" required placeholder=" Your First Name " value="<?php echo $row['fname']; ?>" maxlength="64"  
style="border:1px hidden #000000; text-align:center; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

<label style=" display:block; float:right;  width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff;  border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="name2" placeholder=" Your Last Name " value="<?php echo $row['lname']; ?>" maxlength="64" onfocus=
"clearinputText7();" style="border:1px hidden #000000; text-align:center; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

</div>

<br><br>

<div style=" width:46%;  display:block; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder;">

<span style=" display:inline-block; float:left; width:60%; height:auto; padding-bottom:0.3%; padding-top:0.3%; font-weight:bolder; 
background-color:#ffffff; position:relative; border:1px hidden #bbbbbb; border-radius:2px;">

<label style="width:49%; position:relative; margin-right:2%;">
<input type="radio" name="gender" id="male" value="male" <?php if($gender == "male") echo "checked='checked'";?>  
style="border:1px hidden #000000; float:left; text-align:justify; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:10%; border-radius:1px; position:relative; background-color:#ffffff; height:auto; outline:none;">
<input type="text" name="res1" value=" Male " readonly="readonly" style="border:1px hidden #000000; font-size:15px; font-weight:bold; 
color:#000000; font-family:Times New Roman; float:left; text-align:justify; width:15%; border-radius:1px; position:relative; 
outline:none; ">
</label>

<label style="width:49%; position:relative;">
<input type="radio" name="gender" id="female" value="female" <?php if($gender == "female") echo "checked='checked'";?> 
style="border:1px hidden #000000; float:left; text-align:justify; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:10%; border-radius:1px; position:relative; background-color:#ffffff; height:auto; outline:none;">
<input type="text" name="res1" value=" Female " readonly="readonly" style="border:1px hidden #000000; font-size:15px; font-weight:bold;  
color:#000000; font-family:Times New Roman; float:left; text-align:justify; width:19%; border-radius:1px; position:relative; 
outline:none;">
</label>

</span>

<span style=" display:block; margin-left:1%; float:right; position:relative; width:37%; ">
<input type="text" name="res" value=" * Your Gender " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; color:#3B65A7; padding:0.5% 1%; font-family:Times New Roman; width:98%;
border-radius:1px; position:relative; outline:none;">
</span>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="contact1" placeholder=" Your Contact No." value="<?php echo $row['contact_number']; ?>" maxlength="20" 
onfocus="clearinputText8();" 
style="border:1px hidden #000000; text-align:center; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

<label style=" display:block; float:right; width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="contact2" placeholder=" Your Mobile No." value="<?php echo $row['mobile_number']; ?>" maxlength="20" 
onfocus="clearinputText8();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left;  width:30%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px hidden #BBBBBB; margin-right:3%; border-radius:2px;">
<select name="country" id="country" onchange="load_state(this.value)" style="width:100%; outline:none;">
<option value="0">Select Country</option>
<?php
$query_country=mysql_query("select * from country") or die(mysql_error());
while($row_country=mysql_fetch_array($query_country))
{
?>
<option value="<?php echo $row_country['country_id'];?>"<?php if($country == $row_country['country_id']) 
echo "selected='selected'";?> ><?php echo $row_country['country_name'];?></option>
<?php
}
?>										
</select>
</label>

<label id="state">
</label>

<label id="city" >
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:30%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px; margin-right:3%;">  
  <select name="day" id="day" title="Birth Day is Required" onFocus="clearinputText11();" style="height:auto; position:relative; 
  width:100%; outline:none;">
  <option value=""> Birth Day </option>
  <option value="1" <?php if ($day1 == "1") echo "selected='selected'";?>>1</option>
  <option value="2" <?php if ($day1 == "2") echo "selected='selected'";?>>2</option>
  <option value="3" <?php if ($day1 == "3") echo "selected='selected'";?>>3</option>
  <option value="4" <?php if ($day1 == "4") echo "selected='selected'";?>>4</option>
  <option value="5" <?php if ($day1 == "5") echo "selected='selected'";?>>5</option>
  <option value="6" <?php if ($day1 == "6") echo "selected='selected'";?>>6</option>
  <option value="7" <?php if ($day1 == "7") echo "selected='selected'";?>>7</option>
  <option value="8" <?php if ($day1 == "8") echo "selected='selected'";?>>8</option>
  <option value="9" <?php if ($day1 == "9") echo "selected='selected'";?>>9</option>
  <option value="10" <?php if ($day1 == "10") echo "selected='selected'";?>>10</option>
  <option value="11" <?php if ($day1 == "11") echo "selected='selected'";?>>11</option>
  <option value="12" <?php if ($day1 == "12") echo "selected='selected'";?>>12</option>
  <option value="13" <?php if ($day1 == "13") echo "selected='selected'";?>>13</option>
  <option value="14" <?php if ($day1 == "14") echo "selected='selected'";?>>14</option>
  <option value="15" <?php if ($day1 == "15") echo "selected='selected'";?>>15</option>
  <option value="16" <?php if ($day1 == "16") echo "selected='selected'";?>>16</option>
  <option value="17" <?php if ($day1 == "17") echo "selected='selected'";?>>17</option>
  <option value="18" <?php if ($day1 == "18") echo "selected='selected'";?> >18</option>
  <option value="19" <?php if ($day1 == "19") echo "selected='selected'";?>>19</option>
  <option value="20" <?php if ($day1 == "20") echo "selected='selected'";?>>20</option>
  <option value="21" <?php if ($day1 == "21") echo "selected='selected'";?>>21</option>
  <option value="22" <?php if ($day1 == "22") echo "selected='selected'";?>>22</option>
  <option value="23" <?php if ($day1 == "23") echo "selected='selected'";?>>23</option>
  <option value="24" <?php if ($day1 == "24") echo "selected='selected'";?>>24</option>
  <option value="25" <?php if ($day1 == "25") echo "selected='selected'";?>>25</option>
  <option value="26" <?php if ($day1 == "26") echo "selected='selected'";?>>26</option>
  <option value="27" <?php if ($day1 == "27") echo "selected='selected'";?>>27</option>
  <option value="28" <?php if ($day1 == "28") echo "selected='selected'";?>>28</option>
  <option value="29" <?php if ($day1 == "29") echo "selected='selected'";?>>29</option>
  <option value="30" <?php if ($day1 == "30") echo "selected='selected'";?>>30</option>
  <option value="31" <?php if ($day1 == "31") echo "selected='selected'";?>>31</option>
  </select>
  </label>
  
<label style=" display:block; float:left; position:relative; width:30%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
 <select name="month" title="Birth Month is Required" onFocus="clearinputText12();" style="height:auto; position:relative; width:100%; 
 outline:none;">
  <option value=""> Birth Month </option>
  <option value="01" <?php if ($month1 == "01") echo "selected='selected'";?>>Jan</option>
  <option value="02" <?php if ($month1 == "02") echo "selected='selected'";?>>Feb</option>
  <option value="03" <?php if ($month1 == "03") echo "selected='selected'";?>>Mar</option>
  <option value="04" <?php if ($month1 == "04") echo "selected='selected'";?>>Apr</option>
  <option value="05" <?php if ($month1 == "05") echo "selected='selected'";?>>May</option>
  <option value="06" <?php if ($month1 == "06") echo "selected='selected'";?>>Jun</option>
  <option value="07" <?php if ($month1 == "07") echo "selected='selected'";?>>Jul</option>
  <option value="08" <?php if ($month1 == "08") echo "selected='selected'";?>>Aug</option>
  <option value="09" <?php if ($month1 == "09") echo "selected='selected'";?>>Sep</option>
  <option value="10" <?php if ($month1 == "10") echo "selected='selected'";?>>Oct</option>
  <option value="11" <?php if ($month1 == "11") echo "selected='selected'";?>>Nov</option>
  <option value="12" <?php if ($month1 == "12") echo "selected='selected'";?>>Dec</option></select>
  </label>

<label style=" display:block; float:right; position:relative; width:29%; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">  
  <select name="year" title="Birth Year is Required" onFocus="clearinputText13();" style="height:auto; position:relative; width:100%; 
  outline:none;">
  <option value=""> Birth Year </option>
	<option value="2013" <?php if ($year1 == "2013") echo "selected='selected'";?>>2013</option>
	<option value="2012" <?php if ($year1 == "2012") echo "selected='selected'";?>>2012</option>
	<option value="2011" <?php if ($year1 == "2011") echo "selected='selected'";?>>2011</option>
	<option value="2010" <?php if ($year1 == "2010") echo "selected='selected'";?>>2010</option>
	<option value="2009" <?php if ($year1 == "2009") echo "selected='selected'";?>>2009</option>
	<option value="2008" <?php if ($year1 == "2008") echo "selected='selected'";?>>2008</option>
	<option value="2007" <?php if ($year1 == "2007") echo "selected='selected'";?>>2007</option>
	<option value="2006" <?php if ($year1 == "2006") echo "selected='selected'";?>>2006</option>
 	<option value="2005" <?php if ($year1 == "2005") echo "selected='selected'";?>>2005</option>
	<option value="2004" <?php if ($year1 == "2004") echo "selected='selected'";?>>2004</option>
	<option value="2003" <?php if ($year1 == "2003") echo "selected='selected'";?>>2003</option>
	<option value="2002" <?php if ($year1 == "2002") echo "selected='selected'";?>>2002</option>
	<option value="2001" <?php if ($year1 == "2001") echo "selected='selected'";?>>2001</option>
	<option value="2000" <?php if ($year1 == "2000") echo "selected='selected'";?>>2000</option>
	<option value="1999" <?php if ($year1 == "1999") echo "selected='selected'";?>>1999</option>
	<option value="1998" <?php if ($year1 == "1998") echo "selected='selected'";?>>1998</option>
	<option value="1997" <?php if ($year1 == "1997") echo "selected='selected'";?>>1997</option>
	<option value="1996" <?php if ($year1 == "1996") echo "selected='selected'";?>>1996</option>
	<option value="1995" <?php if ($year1 == "1995") echo "selected='selected'";?>>1995</option>
	<option value="1994" <?php if ($year1 == "1994") echo "selected='selected'";?>>1994</option>
	<option value="1993" <?php if ($year1 == "1993") echo "selected='selected'";?>>1993</option>
	<option value="1992" <?php if ($year1 == "1992") echo "selected='selected'";?>>1992</option>
	<option value="1991" <?php if ($year1 == "1991") echo "selected='selected'";?>>1991</option>
	<option value="1990" <?php if ($year1 == "1990") echo "selected='selected'";?>>1990</option>
	<option value="1989" <?php if ($year1 == "1989") echo "selected='selected'";?>>1989</option>
	<option value="1988" <?php if ($year1 == "1988") echo "selected='selected'";?>>1988</option>
	<option value="1987" <?php if ($year1 == "1987") echo "selected='selected'";?>>1987</option>
	<option value="1986" <?php if ($year1 == "1986") echo "selected='selected'";?>>1986</option>
	<option value="1985" <?php if ($year1 == "1985") echo "selected='selected'";?>>1985</option>
	<option value="1984" <?php if ($year1 == "1984") echo "selected='selected'";?>>1984</option>
	<option value="1983" <?php if ($year1 == "1983") echo "selected='selected'";?>>1983</option>
	<option value="1982" <?php if ($year1 == "1982") echo "selected='selected'";?>>1982</option>
	<option value="1981" <?php if ($year1 == "1981") echo "selected='selected'";?>>1981</option>
	<option value="1980" <?php if ($year1 == "1980") echo "selected='selected'";?>>1980</option>
	<option value="1979" <?php if ($year1 == "1979") echo "selected='selected'";?>>1979</option>
	<option value="1978" <?php if ($year1 == "1978") echo "selected='selected'";?>>1978</option>
	<option value="1977" <?php if ($year1 == "1977") echo "selected='selected'";?>>1977</option>
	<option value="1976" <?php if ($year1 == "1976") echo "selected='selected'";?>>1976</option>
	<option value="1975" <?php if ($year1 == "1975") echo "selected='selected'";?>>1975</option>
	<option value="1974" <?php if ($year1 == "1974") echo "selected='selected'";?>>1974</option>
	<option value="1973" <?php if ($year1 == "1973") echo "selected='selected'";?>>1973</option>
	<option value="1972" <?php if ($year1 == "1972") echo "selected='selected'";?>>1972</option>
	<option value="1971" <?php if ($year1 == "1971") echo "selected='selected'";?>>1971</option>
	<option value="1970" <?php if ($year1 == "1970") echo "selected='selected'";?>>1970</option>
	<option value="1969" <?php if ($year1 == "1969") echo "selected='selected'";?>>1969</option>
	<option value="1968" <?php if ($year1 == "1968") echo "selected='selected'";?>>1968</option>
	<option value="1967" <?php if ($year1 == "1967") echo "selected='selected'";?>>1967</option>
	<option value="1966" <?php if ($year1 == "1966") echo "selected='selected'";?>>1966</option>
	<option value="1965" <?php if ($year1 == "1965") echo "selected='selected'";?>>1965</option>
	<option value="1964" <?php if ($year1 == "1964") echo "selected='selected'";?>>1964</option>
	<option value="1963" <?php if ($year1 == "1963") echo "selected='selected'";?>>1963</option>
	<option value="1962" <?php if ($year1 == "1962") echo "selected='selected'";?>>1962</option>
	<option value="1961" <?php if ($year1 == "1961") echo "selected='selected'";?>>1961</option>
	<option value="1960" <?php if ($year1 == "1960") echo "selected='selected'";?>>1960</option>
	<option value="1959" <?php if ($year1 == "1959") echo "selected='selected'";?>>1959</option>
	<option value="1958" <?php if ($year1 == "1958") echo "selected='selected'";?>>1958</option>
	<option value="1957" <?php if ($year1 == "1957") echo "selected='selected'";?>>1957</option>
	<option value="1956" <?php if ($year1 == "1956") echo "selected='selected'";?>>1956</option>
	<option value="1955" <?php if ($year1 == "1955") echo "selected='selected'";?>>1955</option>
	<option value="1954" <?php if ($year1 == "1954") echo "selected='selected'";?>>1954</option>
	<option value="1953" <?php if ($year1 == "1953") echo "selected='selected'";?>>1953</option>
	<option value="1952" <?php if ($year1 == "1952") echo "selected='selected'";?>>1952</option>
	<option value="1951" <?php if ($year1 == "1951") echo "selected='selected'";?>>1951</option>
	<option value="1950" <?php if ($year1 == "1950") echo "selected='selected'";?>>1950</option>
	<option value="1949" <?php if ($year1 == "1949") echo "selected='selected'";?>>1949</option>
	<option value="1948" <?php if ($year1 == "1948") echo "selected='selected'";?>>1948</option>
	<option value="1947" <?php if ($year1 == "1947") echo "selected='selected'";?>>1947</option>
	<option value="1946" <?php if ($year1 == "1946") echo "selected='selected'";?>>1946</option>
	<option value="1945" <?php if ($year1 == "1945") echo "selected='selected'";?>>1945</option>
	</select>
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:inline-block; float:left; position:relative;  width:54%; font-family:Times New Roman; font-size:14px; 
height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;"> 
<input type="file" name="photo" style="border:1px hidden #000000; position:relative; text-align:left; height:auto;  font-size:14px;  padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Upload Profile Photo " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; outline:none;">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#ffffff;">
<input type="text" name="jpg" value="Photo Size must be less than 20 KB and be in Jpeg/Jpg/Png Format" 
style="border:1px hidden #000000; color:#C41200; text-align:center; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:100%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#ffffff;">
<input type="text" name="jpg" value="Your Information is Personal and will not be Shared with Anyone by Us" 
style="border:1px hidden #000000; color:#0000EE; text-align:center; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:100%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

</div>

<br><br>

<div style=" display:block; width:15%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:40%; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="submit" name="submit" value="Save" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%; outline:none;">
</label>

<label style=" display:block; float:right; position:relative; width:40%; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="reset" name="submit" value="Reset" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%; outline:none;">
</label>

</div>

</form>

</div>

</center>

</div>

<center>

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>

</body>

<?php
include("footer.php");
?>
 
</label> 

</div>

</center>
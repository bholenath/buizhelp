<?php

	if(isset($_GET["name"]))
    {
    $data = $_GET["name"];
    }
	
include("header1.php");
include("db.php");
$query = "SELECT users.user_name as user_name, users.user_id as user_id, business_profile.*
FROM users, business_profile
WHERE users.user_id = business_profile.user_id and users.user_name = '$data'";
$result=mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$date1 = $row['open_since'];
$cash=$row['cash'];
$card=$row['card'];
$voucher=$row['voucher'];
$others=$row['others'];
$substr= explode("-", $date1);
$month1 = $substr[0];
$year1 = $substr[1];
$category = $row['category_id'];
$gender = $row['gender'];
$addr = $row['image'];
$opening = $row['opening_hours'];
$closing = $row['closing_hours'];
$reservation = $row['reservation'];
$parking = $row['parking'];
$homedelivery = $row['home_delivery'];
$group = $row['groups'];
$couples = $row['couples'];
$country = $row['country_id'];
$kids = $row['kids'];
$takeout = $row['take_out'];
$waiterservice = $row['waiter_service'];
$outdoorseating = $row['outdoor_seating'];
$wifi = $row['wi_fi'];
$alcohol = $row['alcohol'];
$tv = $row['tv'];
$catering = $row['catering'];
$wheelchair = $row['wheel_chair'];
$noise = $row['noise_id'];
$iname=htmlspecialchars($data);
$_SESSION['client2']=$iname;
?>

<script type="text/javascript">

	function take()	
	{
	"<?php 	
	if (isset($_SESSION['client2']))   
    $name = $_SESSION['client2'];	
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

<form name="details4" id="details4" method="POST" action="profile_business_update.php" target="_self" onSubmit="return validate5()" 
enctype="multipart/form-data">

<div style=" display:block; width:81px; position:relative; font-family:Arial; font-size:14px; height:80px; font-weight:bolder;">

<label style=" display:block; width:auto; position:relative; font-family:Times New Roman;  height:80px; 
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

<div style=" display:block; width:46%; position:relative; ">

<label style=" display:block; width:auto; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder;">
<font style="color:#3B65A7; text-align:justify; ">Please provide your Complete Business details, it would help our customers to easily 
find you.<br> Do not write Hotel, Restuarant etc. attached to your Business name. </font>
</label>

</div>

<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:auto; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="username1" placeholder="UserName/E-mail Id" value="<?php echo $row['user_name']; ?>" 
readonly="readonly" maxlength="64" style=" border:1px hidden #000000; color:#999999; text-align:center; padding-top:2px; 
font-size:14px; font-family:Times New Roman; width:100%; border-radius:1px; background-color:#ffffff;">
</label>

</div>

<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:inline-block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="category"  style="height:27px; position:relative; width:100%; ">
  <option value="0"> Business Category </option>
  <?php
$query_category=mysql_query("select * from food_category") or die(mysql_error());
while($row_category=mysql_fetch_array($query_category))
{
?>
<option value="<?php echo $row_category['category_id'];?>" <?php if($category == $row_category['category_id']) 
echo "selected='selected'";?> > <?php echo $row_category['category_name'];?> </option>
<?php
}
?>	
</select>
</label>

<label style=" display:inline-block; margin-left:1%; float:right; position:relative; width:42%; background-color:#ffffff;">
<input type="text" name="res" value=" * Business Type " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="name2" required placeholder=" Your Company Registered Name " rows="1" maxlength="64"  
style="border:1px hidden #000000; position:relative; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; 
border-radius:1px; height:auto; background-color:#ffffff; outline:none; margin::0;">
<?php echo $row['name']; ?>
</textarea>
</label>

</div>

<br>

<div style=" width:46%;  display:block; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder;">

<span style=" display:inline-block; float:left; width:60%; height:auto; padding-bottom:0.3%; padding-top:0.3%; font-weight:bolder; background-color:#ffffff; position:relative; border:1px hidden #bbbbbb; border-radius:2px;">

<label style="width:49%; position:relative; margin-right:2%;">
<input type="radio" name="gender" id="male" value="male" <?php if($gender == "male") echo "checked='checked'";?>  
style="border:1px hidden #000000; float:left; text-align:justify; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:10%; border-radius:1px; position:relative; background-color:#ffffff; height:auto;">
<input type="text" name="res1" value=" Male " readonly="readonly" style="border:1px hidden #000000; font-size:15px; font-weight:bold; color:#000000; font-family:Times New Roman; float:left; text-align:justify; width:15%; border-radius:1px; position:relative; ">
</label>

<label style="width:49%; position:relative;">
<input type="radio" name="gender" id="female" value="female" <?php if($gender == "female") echo "checked='checked'";?> 
style="border:1px hidden #000000; float:left; text-align:justify; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:10%; border-radius:1px; position:relative; background-color:#ffffff; height:auto;">
<input type="text" name="res1" value=" Female " readonly="readonly" style="border:1px hidden #000000; font-size:15px; font-weight:bold;  color:#000000; font-family:Times New Roman; float:left; text-align:justify; width:19%; border-radius:1px; position:relative; ">
</label>

</span>

<span style=" display:block; margin-left:1%; float:right; position:relative; width:37%; ">
<input type="text" name="res" value=" * Your Gender " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; position:relative; ">
</span>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="address" required placeholder=" Your Official Address " rows="2" maxlength="100"  
style="border:1px hidden #000000; position:relative; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; height:auto; background-color:#ffffff; outline:none;">
<?php echo $row['address']; ?>
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left;  width:30%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px; outline:none;">
<select name="country" id="country" onchange="load_state(this.value)" style="width:100%;">
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

<label style=" display:block; float:left; position:relative; width:3%; font-family:Arial; font-size:14px; height:23px; 
font-weight:bolder; border:1px hidden #007eff; outline:none;">
</label>

<label id="state">
</label>

<label id="city">
</label>

<br><br>

<label id="area">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="contact1" placeholder=" Your Contact No. " value="<?php echo $row['contact_number']; ?>" maxlength="20" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; 
border-radius:1px; background-color:#ffffff; outline:none;">
</label>

<label style=" display:block; float:right; width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="contact2" placeholder=" Your Mobile No. " value="<?php echo $row['mobile_number']; ?>" maxlength="20" 
 style="border:1px hidden #000000; text-align:center;  font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; background-color:#ffffff; outline:none;">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="website" placeholder=" Your Website Address " rows="1" maxlength="30"  
style="border:1px hidden #000000; position:relative; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; height:auto; background-color:#ffffff; outline:none;">
<?php echo $row['website']; ?>
</textarea>
</label>

</div>

<br>

<div style=" width:46%; position:relative; display:block; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder;">

<span style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#FDF7E1; 
border:1px solid #FFD735; border-radius:2px;">
<input type="checkbox"  name="payment[0]" id="payment" value="1" <?php if($cash == "1") echo "checked='checked'"; ?>  
style="border:1px hidden #000000;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%;"> Cash </font>

<input type="checkbox"  name="payment[1]" id="payment" value="1" <?php if($card == "1") echo "checked='checked'"; ?>   
style="border:1px hidden #000000;   font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%"> Credit/Debit Card </font>

<input type="checkbox"  name="payment[2]" id="payment" value="1" <?php if($voucher == "1") echo "checked='checked'"; ?>   
style="border:1px hidden #000000;   font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%"> Voucher </font>

<input type="checkbox"  name="payment[3]" id="payment" value="1" <?php if($others == "1") echo "checked='checked'"; ?>    
style="border:1px hidden #000000;   font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%"> Others </font>
</span>

<br>

<label style=" display:block; float:none; position:relative; width:100%; ">
<input type="text" name="res" value="* Payment Types Accepted (Select All that Applied)" readonly="readonly" 
style="border:1px hidden #000000; text-align:center;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; 
font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:48%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">

<input type="text" name="beds" placeholder=" No. of Beds " maxlength="4"
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; 
border-radius:1px; background-color:#ffffff; outline:none;">

</label>
  
  <label style=" display:block; float:left ; position:relative;  width:2%; font-family:Arial; font-size:14px; height:23px; 
  font-weight:bolder; border:1px hidden #007eff;">
  </label>
  
  
<label style="display:block; float:left; position:relative; width:48.5%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">

<input type="text" name="rooms" placeholder=" No. of Rooms " maxlength="4"  
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%;
border-radius:1px; background-color:#ffffff; outline:none;">
  
</label>
  
<br>

<label style=" display:block; float:none; position:relative; width:100%; ">
<input type="text" name="res" value="* No. of Beds and Rooms (For Hotel, Lodges etc. only)" readonly="readonly" 
style="border:1px hidden #000000; text-align:center;  font-size:13px; font-weight:500; color:#3B65A7; padding:0.5% 1%; 
font-family:Times New Roman; width:98%; border-radius:1px; outline:none;">
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="month" style="height:auto; position:relative; width:100%; ">
  <option value=""> Opening Month </option>
  <option value="Jan" <?php if ($month1 == "Jan") echo "selected='selected'";?>>Jan</option>
  <option value="Feb" <?php if ($month1 == "Feb") echo "selected='selected'";?>>Feb</option>
  <option value="Mar" <?php if ($month1 == "Mar") echo "selected='selected'";?>>Mar</option>
  <option value="Apr" <?php if ($month1 == "Apr") echo "selected='selected'";?>>Apr</option>
  <option value="May" <?php if ($month1 == "May") echo "selected='selected'";?>>May</option>
  <option value="Jun" <?php if ($month1 == "Jun") echo "selected='selected'";?>>Jun</option>
  <option value="Jul" <?php if ($month1 == "Jul") echo "selected='selected'";?>>Jul</option>
  <option value="Aug" <?php if ($month1 == "Aug") echo "selected='selected'";?>>Aug</option>
  <option value="Sep" <?php if ($month1 == "Sep") echo "selected='selected'";?>>Sep</option>
  <option value="Oct" <?php if ($month1 == "Oct") echo "selected='selected'";?>>Oct</option>
  <option value="Nov" <?php if ($month1 == "Nov") echo "selected='selected'";?>>Nov</option>
  <option value="Dec" <?php if ($month1 == "Dec") echo "selected='selected'";?>>Dec</option></select>
  </label>
  
  <label style=" display:block; float:left ; position:relative;  width:1.5%; font-family:Arial; font-size:14px; height:23px; 
  font-weight:bolder; border:1px hidden #007eff;">
  </label>

<label style=" display:inline-block; float:left; position:relative;  width:31%; font-family:Times New Roman; font-size:14px; 
height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">   
<select name="year" style="height:auto; position:relative; width:100%; ">
    <option value=""> Opening Year </option>
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

<label style=" display:block; float:right; position:relative; width:30%; ">
<input type="text" name="res" value=" * Business Started " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="opening" id="opening" onload="value_chk();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Opening Hours </option>
  <option value="00" <?php if ($opening == "00") echo "selected='selected'";?>>00:00</option>
  <option value="01" <?php if ($opening == "01") echo "selected='selected'";?>>01:00</option>
  <option value="02" <?php if ($opening == "02") echo "selected='selected'";?>>02:00</option>
  <option value="03" <?php if ($opening == "03") echo "selected='selected'";?>>03:00</option>
  <option value="04" <?php if ($opening == "04") echo "selected='selected'";?>>04:00</option>
  <option value="05" <?php if ($opening == "05") echo "selected='selected'";?>>05:00</option>
  <option value="06" <?php if ($opening == "06") echo "selected='selected'";?>>06:00</option>
  <option value="07" <?php if ($opening == "07") echo "selected='selected'";?>>07:00</option>
  <option value="08" <?php if ($opening == "08") echo "selected='selected'";?>>08:00</option>
  <option value="09" <?php if ($opening == "09") echo "selected='selected'";?>>09:00</option>
  <option value="10" <?php if ($opening == "10") echo "selected='selected'";?>>10:00</option>
  <option value="11" <?php if ($opening == "11") echo "selected='selected'";?>>11:00</option>
  <option value="12" <?php if ($opening == "12") echo "selected='selected'";?>>12:00</option>
  <option value="13" <?php if ($opening == "13") echo "selected='selected'";?>>13:00</option>
  <option value="14" <?php if ($opening == "14") echo "selected='selected'";?>>14:00</option>
  <option value="15" <?php if ($opening == "15") echo "selected='selected'";?>>15:00</option>
  <option value="16" <?php if ($opening == "16") echo "selected='selected'";?>>16:00</option>
  <option value="17" <?php if ($opening == "17") echo "selected='selected'";?>>17:00</option>
  <option value="18" <?php if ($opening == "18") echo "selected='selected'";?>>18:00</option>
  <option value="19" <?php if ($opening == "19") echo "selected='selected'";?>>19:00</option>
  <option value="20" <?php if ($opening == "20") echo "selected='selected'";?>>20:00</option>
  <option value="21" <?php if ($opening == "21") echo "selected='selected'";?>>21:00</option>
  <option value="22" <?php if ($opening == "22") echo "selected='selected'";?>>22:00</option>
  <option value="23" <?php if ($opening == "23") echo "selected='selected'";?>>23:00</option>
</select>
</label>
 
  <label style=" display:block; float:left ; position:relative;  width:1.5%; font-family:Arial; font-size:14px; height:23px; 
  font-weight:bolder; border:1px hidden #007eff;">
  </label>

<label style=" display:inline-block; float:left; position:relative;  width:31%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">   
<select name="closing" id="closing" onload="value_chk1();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Closing Hours </option>
  <option value="00" <?php if ($closing == "00") echo "selected='selected'";?>>00:00</option>
  <option value="01" <?php if ($closing == "01") echo "selected='selected'";?>>01:00</option>
  <option value="02" <?php if ($closing == "02") echo "selected='selected'";?>>02:00</option>
  <option value="03" <?php if ($closing == "03") echo "selected='selected'";?>>03:00</option>
  <option value="04" <?php if ($closing == "04") echo "selected='selected'";?>>04:00</option>
  <option value="05" <?php if ($closing == "05") echo "selected='selected'";?>>05:00</option>
  <option value="06" <?php if ($closing == "06") echo "selected='selected'";?>>06:00</option>
  <option value="07" <?php if ($closing == "07") echo "selected='selected'";?>>07:00</option>
  <option value="08" <?php if ($closing == "08") echo "selected='selected'";?>>08:00</option>
  <option value="09" <?php if ($closing == "09") echo "selected='selected'";?>>09:00</option>
  <option value="10" <?php if ($closing == "10") echo "selected='selected'";?>>10:00</option>
  <option value="11" <?php if ($closing == "11") echo "selected='selected'";?>>11:00</option>
  <option value="12" <?php if ($closing == "12") echo "selected='selected'";?>>12:00</option>
  <option value="13" <?php if ($closing == "13") echo "selected='selected'";?>>13:00</option>
  <option value="14" <?php if ($closing == "14") echo "selected='selected'";?>>14:00</option>
  <option value="15" <?php if ($closing == "15") echo "selected='selected'";?>>15:00</option>
  <option value="16" <?php if ($closing == "16") echo "selected='selected'";?>>16:00</option>
  <option value="17" <?php if ($closing == "17") echo "selected='selected'";?>>17:00</option>
  <option value="18" <?php if ($closing == "18") echo "selected='selected'";?>>18:00</option>
  <option value="19" <?php if ($closing == "19") echo "selected='selected'";?>>19:00</option>
  <option value="20" <?php if ($closing == "20") echo "selected='selected'";?>>20:00</option>
  <option value="21" <?php if ($closing == "21") echo "selected='selected'";?>>21:00</option>
  <option value="22" <?php if ($closing == "22") echo "selected='selected'";?>>22:00</option>
  <option value="23" <?php if ($closing == "23") echo "selected='selected'";?>>23:00</option>
</select>
</label>  

<label style=" display:block; float:right; position:relative; width:30%; ">
<input type="text" name="res" value=" * Working Hours " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="reservation" id="reservation" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Reservation </option>
  <option value="Yes" <?php if ($reservation == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($reservation == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Reservation Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="parking" id="parking" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Parking </option>
  <option value="Yes" <?php if ($parking == "Yes") echo "selected='selected'";?> >Yes</option>
  <option value="No" <?php if ($parking == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Parking Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="homedelivery" id="homedelivery" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Home Delivery </option>
  <option value="Yes" <?php if ($homedelivery == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($homedelivery == "No") echo "selected='selected'";?>>No</option>
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * HomeDelivery Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="group" id="group" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Group Friendly </option>
  <option value="Yes" <?php if ($group == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($group == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Good for Groups " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="couples" id="couples" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Couples Friendly </option>
  <option value="Yes" <?php if ($couples == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($couples == "No") echo "selected='selected'";?>>No</option>
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Good for Couples " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="kids" id="kids" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Kids Friendly </option>
  <option value="Yes" <?php if ($kids == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($kids == "No") echo "selected='selected'";?>>No</option>
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Good for Kids " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br> 

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="takeout" id="takeout" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Take Out </option>
  <option value="Yes" <?php if ($takeout == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($takeout == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Take Out Facility  " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="waiterservice" id="waiterservice" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Waiter Service </option>
  <option value="Yes" <?php if ($waiterservice == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($waiterservice == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Waiter Service " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="outdoorseating" id="outdoorseating" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Outdoor Seating </option>
  <option value="Yes" <?php if ($outdoorseating == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($outdoorseating == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Outdoor seating Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="wifi" id="wifi" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Wi-Fi </option>
  <option value="Yes" <?php if ($wifi == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($wifi == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Wi-Fi Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="alcohol" id="alcohol" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Alcohol </option>
  <option value="Yes" <?php if ($alcohol == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($alcohol == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Alcohol Allowed " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="tv" id="tv" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> TV </option>
  <option value="Yes" <?php if ($tv == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($tv == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * TV Available " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="catering" id="catering" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Catering </option>
  <option value="Yes" <?php if ($catering == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($catering == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Catering Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="wheelchair" id="wheelchair" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Wheel Chair </option>
  <option value="Yes" <?php if ($wheelchair == "Yes") echo "selected='selected'";?>>Yes</option>
  <option value="No" <?php if ($wheelchair == "No") echo "selected='selected'";?>>No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * WheelChair Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;">
<select name="noise" id="noise" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value="0">Noise Level</option>
<?php
$query_noise=mysql_query("select * from noise") or die(mysql_error());
while($row_noise=mysql_fetch_array($query_noise))
{
?>
<option value="<?php echo $row_noise['noise_id'];?>" <?php if($noise == $row_noise['noise_id']) 
echo "selected='selected'";?>><?php echo $row_noise['noise_level'];?></option>
<?php
}
?>										
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Noise Level Around " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">

</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="attire" placeholder="Your Place Attire" rows="2" maxlength="100" style="border:1px hidden #000000; position:relative; 
font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; height:auto; background-color:#ffffff; 
outline:none;">
<?php echo $row['attire']; ?>
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="speciality" placeholder="Your Place Speciality" rows="2" maxlength="100" 
style="border:1px hidden #000000; position:relative; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; height:auto; background-color:#ffffff; outline:none;">
<?php echo $row['speciality']; ?>
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="ambience" placeholder="Your Place Ambience" rows="2" maxlength="100"  style="border:1px hidden #000000; position:relative; font-size:14px; padding:0.5% 1%; font-family:Times New Roman; width:98%; border-radius:1px; height:auto; background-color:#ffffff; outline:none;">
<?php echo $row['ambience']; ?>
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative;  width:54%; font-family:Times New Roman; font-size:14px; 
height:auto; font-weight:bolder; background-color:#ffffff; border:0px solid #BBBBBB; border-radius:2px;"> 
<input type="file" name="photo" style="border:1px hidden #000000; position:relative; text-align:left; height:auto;  font-size:14px;  font-family:Times New Roman; width:100%; border-radius:1px; background-color:#ffffff;">
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Upload Profile Photo " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<span style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#ffffff;">
<input type="text" name="jpg" value="Photo Size must be less than 20 KB and be in Jpeg/Jpg/Png Format" 
style="border:1px hidden #000000; color:#C41200; text-align:center; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:100%; border-radius:1px; background-color:#ffffff;">
</span>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#ffffff;">
<input type="text" name="jpg" value="Your Information is Personal and will not be Shared with Anyone by Us" 
style="border:1px hidden #000000; color:#0000EE; text-align:center; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:100%; border-radius:1px; background-color:#ffffff;">
</label>

</div>

<br><br>

<div style=" display:block; width:15%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:40%; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="submit" name="submit" value="Save" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%;">
</label>

<label style=" display:block; float:right; position:relative; width:40%; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="reset" name="submit" value="Reset" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%;">
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